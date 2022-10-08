<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Assignment extends CI_Controller
{
    public function index()
    {
        $this->template->set_title('Penugasan');
        $this->template->set_menu('assignment');
        $this->template->view('assignment/index');
    }

    public function form()
    {
        $data['sumber'] = $this->input->get('sumber') ?? 4;
        $data['tugas'] = $this->input->get('tugas') ?? 1;
        $this->template->set_title('Form Penugasan');
        $this->template->set_menu('assignment');
        $this->template->view('assignment/form', $data);
    }
}
