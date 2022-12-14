<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;

class Resolver extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->config->load('app_settings', TRUE);
        $this->load->library('modi_method');
        $this->load->helper('array');
        $this->load->helper('string');
    }

    public function form()
    {
        $data['sumber'] = $this->input->get('sumber');
        $data['tujuan'] = $this->input->get('tujuan');
        /**
         * Load Seeder
         */
        $this->load->library('seeder');
        $seeder = $this->seeder->transportation($data);
        $data   = $this->input->get("seeder") ? array_merge($data, $seeder) : $data;

        $this->template->set_title('Resolver Form');
        $this->template->set_menu('resolver');
        $this->template->view('resolver/form', $data);
    }

    public function submit()
    {
        $sumber = $this->input->get('sumber');
        $tujuan = $this->input->get('tujuan');

        $this->form_validation->set_rules('supply[]', 'Supply', 'required');
        $this->form_validation->set_rules('demand[]', 'Demand', 'required');
        $this->form_validation->set_rules('costs[]', 'Demand', 'required');

        if ($this->form_validation->run()) {
            $costs  = $this->input->post("costs");
            $supply = $this->input->post("supply");
            $demand = $this->input->post("demand");

            $supply         = array_values_as_integer($supply);
            $demand         = array_values_as_integer($demand);
            $cost_matrix    = set_costs_matrix($costs);

            /**
             * Save IP address as an user
             */
            $this->load->model('user_model');

            $ip_address         = $this->input->ip_address();
            $data['ip']         = $ip_address;
            $data['username']   = random_string('alnum', 8);
            $userID             = $this->user_model->first_or_create($ip_address, $data);

            /**
             * Call to first method: Least cost
             */
            $this->session->set_userdata('ip_address', $ip_address);
            $this->least_cost_request($cost_matrix, $supply, $demand, $userID);

            redirect("resolver/results?sumber=$sumber&tujuan=$tujuan", 'refresh');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    protected function least_cost_request($cost_matrix, $supply, $demand, $userID)
    {
        $this->load->model('transport_model');

        try {
            $client = new Client([
                'base_uri' => $this->config->item('app_api_url', 'app_settings'),
            ]);
            $response = $client->request('POST', '/transport/least-cost', [
                'query' => [
                    'token' => $this->config->item('app_api_query', 'app_settings'),
                ],
                'headers' => [
                    'x-token' => $this->config->item('app_api_token', 'app_settings'),
                ],
                'json' => [
                    "supply" => $supply,
                    "demand" => $demand,
                    "cost_matrix" => $cost_matrix,
                ]
            ]);
            $body                       = json_decode($response->getBody());

            $data['user_id']             = $userID;
            $data['supply']              = json_encode($supply);
            $data['demand']              = json_encode($demand);
            $data['costs']               = json_encode($cost_matrix);
            $data['results_least_cost']  = json_encode($body->plan ?? []);
            $data['least_cost']          = $body->total_cost ?? 0;
            $data['modi']                = NULL;
            $data['results_modi']        = NULL;

            /**
             * Save current results of transportation problem
             */
            $transport = $this->transport_model->get_by_user_id($userID);

            if ($transport->id ?? false) {
                $this->transport_model->update($transport->id, $data);
            } else {
                $this->transport_model->insert($data);
            }
        } catch (ClientException $e) {
            $error = Psr7\Message::toString($e->getResponse());
            $this->session->set_userdata('errors', [$error]);
        }
    }

    public function optimize()
    {
        $this->load->model('transport_model');

        $sumber = $this->input->get('sumber');
        $tujuan = $this->input->get('tujuan');

        $this->form_validation->set_rules('solution_id', 'ID', 'required');

        if ($this->form_validation->run()) {
            $ID             = $this->input->post('solution_id');
            $solution       = $this->transport_model->get_by_id($ID);
            $cost_matrix    = json_decode($solution->costs ?? []);
            $supply         = json_decode($solution->supply ?? []);
            $demand         = json_decode($solution->demand ?? []);

            $this->vam_modi_request($cost_matrix, $supply, $demand, $ID);

            redirect("resolver/results?sumber=$sumber&tujuan=$tujuan", 'refresh');
        } else {
            $this->results();
        }
    }

    protected function vam_modi_request($cost_matrix, $supply, $demand, $ID)
    {
        try {
            $client = new Client([
                'base_uri' => $this->config->item('app_api_url', 'app_settings'),
            ]);

            $response = $client->request('POST', '/transport/modi-method', [
                'query' => [
                    'token' => $this->config->item('app_api_query', 'app_settings'),
                ],
                'headers' => [
                    'x-token' => $this->config->item('app_api_token', 'app_settings'),
                ],
                'json' => [
                    "supply" => $supply,
                    "demand" => $demand,
                    "cost_matrix" => $cost_matrix,
                ]
            ]);

            /**
             * Update results MODI and table plan
             */
            $body                     = json_decode($response->getBody());
            $data['results_modi']     = json_encode($body->plan ?? []);
            $data['modi']             = $body->total_cost ?? 0;
            $this->transport_model->update($ID, $data);
        } catch (ClientException $e) {
            $error = Psr7\Message::toString($e->getResponse());
            $this->session->set_userdata('errors', [$error]);
        }
    }

    public function results()
    {
        $this->load->model('transport_model');

        $ip_address             = $this->session->userdata('ip_address');
        $solution               = $this->transport_model->get_by_ip_address($ip_address);

        $data['costs']          = json_decode($solution->costs ?? []);
        $data['supply']         = json_decode($solution->supply ?? []);
        $data['demand']         = json_decode($solution->demand ?? []);
        $data['results_lc']     = json_decode($solution->results_least_cost ?? []);
        $data['least_cost']     = $solution->least_cost ?? NULL;

        $data['results_modi']   = $solution->results_modi ? json_decode($solution->results_modi) : [];
        $data['modi']           = $solution->modi ?? NULL;

        $data['solution_id']    = $solution->id ?? NULL;

        $data['sumber']         = $this->input->get('sumber');
        $data['tujuan']         = $this->input->get('tujuan');

        $this->template->set_title('Results');
        $this->template->view('resolver/results', $data);
    }
}
