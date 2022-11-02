<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->template->set_title('Beranda');
        $this->template->view('dashboard/index');
    }

    public function results()
    {
        $data['ay'] = $this->input->get('ay') ?? 4;
        $data['ax'] = $this->input->get('ax') ?? 3;
        $this->template->set_title('Results');
        $this->template->view('dashboard/results', $data);
    }
}
