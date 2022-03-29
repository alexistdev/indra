<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
            'data' => $this->mmodel->getKategori(),
            'header' => 'Kategori',
        ];

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kategori', $data);
		$this->load->view('templates/footer');
	}

    public function formAddKategori(){

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'kategori', 
            'Kategori', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => "Form Add Kategori",
            ];
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formAddKategori', $data);
            $this->load->view('templates/footer');
        } else {
             $data = [
                'kategori' => htmlspecialchars($this->input->post('kategori')),
            ];

            $this->mmodel->addKategori($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('kategori');
        }
    }

    public function deleteKategori($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}
        $this->mmodel->deleteKategori($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('kategori');
    }

    public function editKategori($id) {
        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'kategori', 
            'Kategori', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => 'Form Edit Kateogri',
                'data' => $this->mmodel->getKategoriById($id),
            ];

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formEditKategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => htmlspecialchars($this->input->post('kategori')),
            ];
            $this->mmodel->actionEditKategori($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('kategori');
        }
    }
}
