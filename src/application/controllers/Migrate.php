<?php

class Migrate extends CI_Controller
{
    protected const NUMBER_OF_ODC = 4;
    protected const NUMBER_OF_CUST = 22;

    public function __construct()
    {
        parent::__construct();
        if (!(($_GET['key'] ?? false) && $_GET['key'] === 'ftth4telkom')) {
            redirect('/welcome', 'refresh');
        }
    }

    public function index()
    {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        }
    }

    public function seeder()
    {
        $this->load->model('odc_model');
        $this->load->model('customer_model');
        if (!$this->odc_model->get_amount()) {
            for ($i = 1; $i <= self::NUMBER_OF_ODC; $i++) {
                $this->odc_model->insert_entry("ODC $i", 24);
            }
            for ($j = 1; $j <= self::NUMBER_OF_CUST; $j++) {
                $this->customer_model->insert_entry("Pelanggan $j");
            }
        }
    }
}
