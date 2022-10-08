<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['world'] = 'World';
        $this->template->set_title('Tentang Aplikasi');
        $this->template->set_menu('about');
        $this->template->view('about/index', $data);
    }
}
