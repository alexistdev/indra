<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data = [
            "header" => "Dashboard",    
        ];
        $this->load->view('templates/pimpinan/header');
        $this->load->view('templates/pimpinan/navbar');
        $this->load->view('pimpinan/dashboard', $data);
        $this->load->view('templates/pimpinan/footer');
    }
}