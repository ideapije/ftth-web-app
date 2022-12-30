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
    }

    public function form()
    {
        $data['sumber'] = $this->input->get('sumber');
        $data['tujuan'] = $this->input->get('tujuan');
        /**
         * Load Seeder
         */
        $this->load->library('seeder');
        $data = $this->seeder->transportation($data);

        $this->template->set_title('Resolver Form');
        $this->template->set_menu('resolver');
        $this->template->view('resolver/form', $data);
    }

    public function submit()
    {
        $this->form_validation->set_rules('supply[]', 'Supply', 'trim|numeric');
        $this->form_validation->set_rules('demand[]', 'Demand', 'trim|numeric');

        if ($this->form_validation->run()) {
            $cost_matrix = $this->input->post("costs");
            $supply = $this->input->post("supply");
            $demand = $this->input->post("demand");

            /**
             * Call to first method: Least cost
             */
            $this->least_cost_request($cost_matrix, $supply, $demand);

            redirect('resolver/results', 'refresh');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    protected function least_cost_request($costs, $supply, $demand)
    {
        $supply         = array_values_as_integer($supply);
        $demand         = array_values_as_integer($demand);
        $cost_matrix    = set_costs_matrix($costs);

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
            $data = json_decode($response->getBody());
            $this->session->set_userdata('least_cost', $data);
        } catch (ClientException $e) {
            $error = Psr7\Message::toString($e->getResponse());
            $this->session->set_userdata('errors', [$error]);
        }
    }

    protected function optimize_modi_request($costs, $supply, $demand)
    {
        $supply         = array_values_as_integer($supply);
        $demand         = array_values_as_integer($demand);
        $cost_matrix    = set_costs_matrix($costs);

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
            $data = json_decode($response->getBody());
            $this->session->set_userdata('modi', $data);
        } catch (ClientException $e) {
            $error = Psr7\Message::toString($e->getResponse());
            $this->session->set_userdata('errors', [$error]);
        }
    }

    public function results()
    {
        $data['least_cost'] = $this->session->userdata('least_cost');
        $this->template->json($data);
    }
}
