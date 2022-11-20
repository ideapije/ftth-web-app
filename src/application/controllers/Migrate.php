<?php

class Migrate extends CI_Controller
{
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
}
