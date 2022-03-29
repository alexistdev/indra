<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends CI_Controller {

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
			'header' => 'Rekomendasi Stok',
			// 'data' => $this->mmodel->getProduk(),
			'dataCluster' => $this->mmodel->getPenjualanByMerk(),
			'dataMerk' => $this->mmodel->getMerk(),
		];

		// var_dump($data);die;
		$this->load->view('templates/pimpinan/header');
		$this->load->view('templates/pimpinan/navbar');
		$this->load->view('pimpinan/rekomendasi', $data);
		$this->load->view('templates/pimpinan/footer');
	}
}
