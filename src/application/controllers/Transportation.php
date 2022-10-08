<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transportation extends CI_Controller
{
    public function index()
    {
        $this->template->set_title('Model Transportasi');
        $this->template->set_menu('transportation');
        $this->template->view('transportation/index');
    }

    public function form()
    {
        $data['sumber'] = $this->input->get('sumber') ?? 4;
        $data['tujuan'] = $this->input->get('tujuan') ?? 1;
        $this->template->set_title('Form Transportasi');
        $this->template->set_menu('transportation');
        $this->template->view('transportation/form', $data);
    }
}
