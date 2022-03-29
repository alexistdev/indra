<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

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
			'header' => 'Produk',
			'data' => $this->mmodel->getProduk(),
		];
		$this->load->view('templates/pimpinan/header');
		$this->load->view('templates/pimpinan/navbar');
		$this->load->view('pimpinan/produk', $data);
		$this->load->view('templates/pimpinan/footer');
	}
}
