<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }

    public function index() {
        if (!$this->session->userdata('username')) {
			redirect('auth');
		}
        $this->form_validation->set_rules(
            'merkId',
            'merkId',
            'required|numeric',
            [
                'required' => 'field tidak kosong!',
                'numeric' => 'field harus angka!',
            ]
        );

        if($this->form_validation->run() == FALSE) {

            $data = [
            'data' => $this->mmodel->getMerk(),
            'kategori' => $this->mmodel->getKategori(),
			'merk' => $this->mmodel->getmerk(),
            'header' => 'Penjualan',
            'tgl_transaksi' => time(),
            'produk' => $this->mmodel->getProduk(),
        ];

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('penjualan', $data);
            $this->load->view('templates/footer');
        } else {

            $produkId = htmlspecialchars($this->input->post('produkId'));

            $getDataProduk = $this->mmodel->getProdukById($produkId);

            $decrement = $getDataProduk['stok'] - 1;
            // var_dump($decrement); die;


            $dataStok = [
                'stok' => $decrement,
            ];

            $this->mmodel->updateProdukByStok($getDataProduk['id'], $dataStok);

            // var_dump($getDataProduk); die;

            $data = [
                'kategoriId' => htmlspecialchars($this->input->post('kategoriId')),
                'produkId' => $produkId,
                'merkId' => htmlspecialchars($this->input->post('merkId')),
                'tgl_penjualan' => time(),
            ];
            $this->mmodel->addPenjualan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('penjualan');
        }
        

    }
}
