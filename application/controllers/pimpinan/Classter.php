<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classter extends CI_Controller {

	public function __construct() {
        parent::__construct();
         $this->load->helper(array('form'));
        $this->load->library('form_validation');
		$this->load->model('mymodel');
    }

	public function index()
	{

		$getMerk = $this->db->get('merk')->result_array();

		$data = [
			'header' => 'rekomendasi stok',
			'speaker' => $this->mymodel->speaker(),
			'mesinCuci' => $this->mymodel->mesinCuci(),
			'tv' => $this->mymodel->tv(),
			'kulkas' => $this->mymodel->kulkas(),
			'setrika' => $this->mymodel->setrika(),
			'mic' => $this->mymodel->mic(),
			'kipasAngin' => $this->mymodel->kipasAngin(),
			'komporGas' => $this->mymodel->komporGas(),
			'speakerAktif' => $this->mymodel->speakerAktif(),
			'cekStok' => $this->mymodel->cekStok(),
		];
		
		$this->load->view('templates/pimpinan/header');
		$this->load->view('templates/pimpinan/navbar');
		$this->load->view('pimpinan/rekomendasi2', $data);
		$this->load->view('templates/pimpinan/footer');

		// var_dump($data);
	}

	public function cekStok(){
		$this->mymodel->cekStok();
	}
}
