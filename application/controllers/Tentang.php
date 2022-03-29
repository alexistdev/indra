<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }

    public function index()
	{
        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $data = [
            'header' => 'Tentang Kami',
        ];

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('tentang', $data);
		$this->load->view('templates/footer');
	}
}