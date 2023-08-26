<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;

class Transportation extends CI_Controller
{
    protected $supplies;
    protected $demands;

    public function index()
    {
        $this->config->load('app_seeders');
        $supplies = $this->config->item('supplies');
        $demands = $this->config->item('demands');

        $this->template->set_title('Model Transportasi');
        $this->template->set_menu('transportation');
        $data['sumber'] = 4;
        $data['tujuan'] = 4;
        $data['supply_amount'] = array_sum($supplies);
        $data['demand_amount'] = array_sum($demands);
        $this->template->view('transportation/index', $data);
    }

    public function form()
    {
        $data['sumber'] = $this->input->get('sumber');
        $data['tujuan'] = $this->input->get('tujuan');
        /**
         * Seeder
         */
        $data = $this->loadSeeder($data);
        $this->template->set_title('Form Transportasi');
        $this->template->set_menu('transportation');
        $this->template->view('transportation/form', $data);
    }

    protected function loadSeeder($data)
    {
        $this->config->load('app_seeders');
        $data['supplies'] = $this->config->item('supplies');
        $data['demands'] = $this->config->item('demands');
        $data['total'] = $this->config->item('total');
        $data['values'] = $this->config->item('values');
        return $data;
    }

    public function submit()
    {
        $supplies = $this->input->post('supplies');
        $demands = $this->input->post('demands');
        $costs = $this->input->post('values');
        try {
            $data['supplies'] = $supplies;
            $data['demands'] = $demands;
            $data['costs'] = $costs;

            $data['results'] = $this->least_cost_method($supplies, $demands, $costs);
            $this->session->set_userdata('least_cost', $data);

            $this->modi_process($supplies, $demands, $costs);

            $sumber = $this->input->get('sumber');
            $tujuan = $this->input->get('tujuan');
            $supply = $this->input->get('supply');
            $demand = $this->input->get('demand');

            redirect("transportation/results?sumber=$sumber&tujuan=$tujuan&supply=$supply&demand=$demand");
        } catch (\Exception $e) {
            $this->session->set_userdata('errors', [$e->getMessage()]);
            redirect('transportation/form', 'refresh');
        }
    }

    protected function least_cost_method($supplies, $demands, $costs)
    {
        $transportCost = 0;

        // Check if supplies and demands are Equal
        $totalSupply = 0;
        foreach ($supplies as $supply) {
            $totalSupply += $supply;
        }
        $totalDemands = 0;
        foreach ($demands as $demand) {
            $totalDemands += $demand;
        }

        if ($totalSupply == $totalDemands) {
            // Initialize Array for Costs that Picked
            $pickedCostsArray = [];
            for ($column = 0; $column < count($costs); $column++) {
                for ($row = 0; $row < count($costs[$column]); $row++) {
                    $pickedCostsArray[$column][$row] = 0;
                }
            }
            $stored = [];
            while ($totalSupply > 0 && $totalDemands > 0) {
                // Find Minimum Cost Available
                $minVal = 999999999999;
                $costIndex = [];
                for ($column = 0; $column < count($costs); $column++) {
                    for ($row = 0; $row < count($costs[$column]); $row++) {
                        if ($costs[$column][$row] < $minVal) {
                            if ($pickedCostsArray[$column][$row] == 0) {
                                $minVal = $costs[$column][$row];
                            }
                        }
                    }
                }

                // Find Index For Array
                for ($column = 0; $column < count($costs); $column++) {
                    for ($row = 0; $row < count($costs[$column]); $row++) {
                        if ($costs[$column][$row] == $minVal) {
                            if ($pickedCostsArray[$column][$row] == 0) {
                                array_push($costIndex, array($column, $row));
                            }
                        }
                    }
                }

                $chosenIndex = [];
                if (count($costIndex) > 1) {
                    // If Multiple Value of Min Choose Box That have Bigger Demand
                    $maxDemand = -1;
                    foreach ($costIndex as $index) {
                        if ($demands[$index[0]] > $maxDemand) {
                            $maxDemand = $demands[$index[0]];
                            $chosenIndex = $index;
                        }
                    }
                } else {
                    $chosenIndex = $costIndex[0];
                }

                if ($demands[$chosenIndex[0]] <= $supplies[$chosenIndex[1]]) {
                    // Demand is Less Than Supplies so Fullfill All
                    $transportCost += $costs[$chosenIndex[0]][$chosenIndex[1]] * $demands[$chosenIndex[0]];
                    $stored[] = [
                        'index' => $chosenIndex,
                        'value' => $costs[$chosenIndex[0]][$chosenIndex[1]],
                        'left' => $demands[$chosenIndex[0]]
                    ];

                    $totalSupply -= $demands[$chosenIndex[0]];
                    $totalDemands -= $demands[$chosenIndex[0]];
                    $supplies[$chosenIndex[1]] -= $demands[$chosenIndex[0]]; // Minus The Supply
                    $demands[$chosenIndex[0]] = 0; // Supplied All Meaning All Demand is Gone

                    // Make All Column Picked Because Demands is Fullfilled
                    for ($row = 0; $row < count($costs[$chosenIndex[0]]); $row++) {
                        $pickedCostsArray[$chosenIndex[0]][$row] = 1;
                    }
                } else {
                    // Demand is More so Take All Remaining Supplies
                    $transportCost += $costs[$chosenIndex[0]][$chosenIndex[1]] * $supplies[$chosenIndex[1]];
                    $stored[] = [
                        'index' => $chosenIndex,
                        'value' => $costs[$chosenIndex[0]][$chosenIndex[1]],
                        'left' => $supplies[$chosenIndex[1]]
                    ];

                    $totalSupply -= $supplies[$chosenIndex[1]];
                    $totalDemands -= $supplies[$chosenIndex[1]];
                    $demands[$chosenIndex[0]] -= $supplies[$chosenIndex[1]]; // Minus The Demand
                    $supplies[$chosenIndex[1]] = 0; // Supply is Gone

                    // Make All Row Picked Because Supply is 0
                    for ($column = 0; $column < count($costs); $column++) {
                        $pickedCostsArray[$column][$chosenIndex[1]] = 1;
                    }
                }
            }
            $this->session->set_userdata('stored', $stored);
            return $transportCost;
        }

        return -1;
    }

    protected function modi_process($supplies, $demands, $costs)
    {
        $this->config->load('app_settings', TRUE);
        $this->load->library('modi_method');
        try {
            $client = new Client([
                'base_uri' => $this->config->item('app_api_url', 'app_settings'),
            ]);

            $cost_matrix = $this->modi_method->transpose_to_cost_matrix($costs);
            $supplies = $this->modi_method->convert_values_to_integer($supplies);
            $demands = $this->modi_method->convert_values_to_integer($demands);

            $response = $client->request('POST', '/transport/modi-method', [
                'query' => [
                    'token' => $this->config->item('app_api_query', 'app_settings'),
                ],
                'headers' => [
                    'x-token' => $this->config->item('app_api_token', 'app_settings'),
                ],
                'json' => [
                    "supply" => $supplies,
                    "demand" => $demands,
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
        $this->template->set_title('Result Transportasi');
        $this->template->set_menu('transportation');

        $data['sumber'] = $this->input->get('sumber');
        $data['tujuan'] = $this->input->get('tujuan');
        $data['stored'] = $this->session->userdata('stored');

        $least_cost = $this->session->userdata('least_cost');
        $data['supplies'] = $least_cost['supplies'];
        $data['demands'] = $least_cost['demands'];
        $data['costs'] = $least_cost['costs'];
        $data['bfs_cost'] = $least_cost['results'];

        $data['modi'] = $this->session->userdata('modi');
        /**
         * Seeder
         */
        $data = $this->loadSeeder($data);
        $this->template->view('transportation/results', $data);
    }
}