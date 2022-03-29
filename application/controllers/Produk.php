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

        // var_dump($data); die;
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('produk', $data);
		$this->load->view('templates/footer');
	}

	public function formAddProduk(){

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'kode_produk', 
            'Kode produk', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );
        $this->form_validation->set_rules(
            'type', 
            'type', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );
        $this->form_validation->set_rules(
            'harga', 
            'harga', 
            'required|numeric',
            [
                'required' => 'field tidak kosong!',
                'numeric' => 'field harus angka!',
            ]
        );
        $this->form_validation->set_rules(
            'stok', 
            'stok', 
            'required|numeric',
            [
                'required' => 'field tidak kosong!',
                'numeric' => 'field harus angka!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => "Form Add Produk",
				'kategori' => $this->mmodel->getKategori(),
				'merk' => $this->mmodel->getmerk(),
				'size' => $this->mmodel->getsize(),
            ];
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formAddProduk', $data);
            $this->load->view('templates/footer');

        } else {
			
            $data = [
				'kategoriId' => htmlspecialchars($this->input->post('kategoriId')),
				'merkId' => htmlspecialchars($this->input->post('merkId')),
				'sizeId' => htmlspecialchars($this->input->post('sizeId')),
				'kode_produk' => htmlspecialchars($this->input->post('kode_produk')),
				'type' => htmlspecialchars($this->input->post('type')),
				'harga' => htmlspecialchars($this->input->post('harga')),
				'stok' => htmlspecialchars($this->input->post('stok')),
			];
			$this->mmodel->addProduk($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
			redirect('produk');
        }
    }

    public function deleteProduk($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->mmodel->deleteProduk($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('produk');
    }

    public function editProduk($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}
        
        $this->form_validation->set_rules(
            'kode_produk', 
            'Kode produk', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );
        $this->form_validation->set_rules(
            'type', 
            'type', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );
        $this->form_validation->set_rules(
            'harga', 
            'harga', 
            'required|numeric',
            [
                'required' => 'field tidak kosong!',
                'numeric' => 'field harus angka!',
            ]
        );
        $this->form_validation->set_rules(
            'stok', 
            'stok', 
            'required|numeric',
            [
                'required' => 'field tidak kosong!',
                'numeric' => 'field harus angka!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
			$getDataProduk = $this->mmodel->getProdukById($id);
            $data = [
                'header' => 'Form Edit Produk',
                'produk' => $this->mmodel->getProdukById($id),
				'kategori' => $this->mmodel->getKategori(),
				'merk' => $this->mmodel->getmerk(),
				'size' => $this->mmodel->getsize(),
            ];

			$data['idKategori'] = $getDataProduk['kategoriId'];
			$data['idMerk'] = $getDataProduk['merkId'];
			$data['idSize'] = $getDataProduk['sizeId'];

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formEditProduk', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
				'kategoriId' => htmlspecialchars($this->input->post('kategoriId')),
				'merkId' => htmlspecialchars($this->input->post('merkId')),
				'sizeId' => htmlspecialchars($this->input->post('sizeId')),
				'kode_produk' => htmlspecialchars($this->input->post('kode_produk')),
				'type' => htmlspecialchars($this->input->post('type')),
				'harga' => htmlspecialchars($this->input->post('harga')),
				'stok' => htmlspecialchars($this->input->post('stok')),
			];
            $this->mmodel->actionEditProduk($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('produk');
        }
    }
}
