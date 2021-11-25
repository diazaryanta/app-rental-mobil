<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $this->load->view('templates_admin/dashboard');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/header');
    }
}

?>