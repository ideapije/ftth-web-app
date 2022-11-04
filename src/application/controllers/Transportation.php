<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transportation extends CI_Controller
{
    protected $supplies;
    protected $demands;

    public function index()
    {
        $this->template->set_title('Model Transportasi');
        $this->template->set_menu('transportation');
        $data['sumber'] = 3;
        $data['tujuan'] = 4;
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
        
        $data['totalCost'] = $this->solveTransportation($supplies, $demands, $costs);

        $this->template->set_title('Result Transportasi');
        $this->template->set_menu('transportation');
        $this->template->view('transportation/result', $data);
    }

    protected function solveTransportation($supplies, $demands, $costs) {
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
                            array_push($costIndex, array($column, $row));
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

            return $transportCost;
        }

        return -1;
    }
}
