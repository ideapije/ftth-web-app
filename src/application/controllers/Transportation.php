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
        /**
         * TODO : 
         * Implementasi algoritma Least Cost
         */       
    }
}
