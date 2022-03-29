<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
}
