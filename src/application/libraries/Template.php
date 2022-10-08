<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template
{
    protected $ci;
    protected $props;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->config->load('app_settings', TRUE);
        $this->props['description'] = $this->ci->config->item('app_description', 'app_settings');
        $this->props['name'] = $this->ci->config->item('app_name', 'app_settings');
        $this->props['navigation'] = $this->ci->config->item('app_navigation', 'app_settings');
    }

    public function view($fileName = null, $data = [])
    {
        if (!$fileName) {
            show_404();
        }
        $this->ci->load->view('layout/header', $this->props);
        $this->ci->load->view('layout/navigation', $this->props);
        $this->ci->load->view($fileName, $data);
        $this->ci->load->view('layout/footer');
    }

    public function set_title($title)
    {
        $this->props['title'] = $title;
    }

    public function set_menu($menu)
    {
        $this->props['menu'] = $menu;
    }
}
