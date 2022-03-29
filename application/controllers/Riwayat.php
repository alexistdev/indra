<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }

    public function index() {
        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $data = [
            'data' => $this->mmodel->getPenjualan(),
            'header' => 'Riwayat',
        ];

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('riwayat', $data);
		$this->load->view('templates/footer');
    }

    public function deleteRiwayat($id) {

        $getDataPenjualan = $this->mmodel->getRiwayatById($id);

        $getDataProduk = $this->mmodel->getProdukById($getDataPenjualan['produkId']);

        $increment = $getDataProduk['stok'] +  1;

        $data = [
            'stok' => $increment,
        ];

        $this->mmodel->updateProdukByStok($getDataProduk['id'], $data);
        
        // $increment = $getDataPenjualan['produkId'];

        $this->mmodel->deleteRiwayat($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
        redirect('riwayat');
    }

    public function editRiwayat($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'harga', 
            'harga', 
            'required|numeric',
            [
                'required' => 'field tidak kosong!',
                'numeric' => 'field harus angka!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $getDataRiwayat = $this->mmodel->getRiwayatById($id);
            $data = [
                'header' => 'Form Edit Riwayat',
                'riwayat' => $this->mmodel->getRiwayatById($id),
                'merk' => $this->mmodel->getMerk(),
                'kategori' => $this->mmodel->getKategori(),
                'produk' => $this->mmodel->getProduk(),
            ];

            $data['idKategori'] = $getDataRiwayat['kategoriId'];
            $data['idMerk'] = $getDataRiwayat['merkId'];
            $data['idProduk'] = $getDataRiwayat['produkId'];
            

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formEditRiwayat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategoriId' => htmlspecialchars($this->input->post('kategoriId')),
                'produkId' => htmlspecialchars($this->input->post('produkId')),
                'merkId' => htmlspecialchars($this->input->post('merkId')),
                'tgl_penjualan' => time(),
                'harga' => htmlspecialchars($this->input->post('harga')),
            ];
            $this->mmodel->actionEditRiwayat($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('riwayat');
        }
    }
}