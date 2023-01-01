<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seeder
{
    protected $ci;
    protected $props;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->config->load('app_seeders');
    }

    public function transportation()
    {
        $data['supplies']   = $this->ci->config->item('supplies');
        $data['demands']    = $this->ci->config->item('demands');
        $data['total']      = $this->ci->config->item('total');
        $data['costs']      = $this->ci->config->item('values');
        return $data;
    }
}
