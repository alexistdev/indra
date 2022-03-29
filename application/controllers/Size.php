<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller {

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
            'data' => $this->mmodel->getSize(),
            'header' => 'Size',
        ];

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('size', $data);
		$this->load->view('templates/footer');
	}

    public function formAddSize(){

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'size', 
            'Size', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => "Form Add Size",
            ];
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formAddSize', $data);
            $this->load->view('templates/footer');
        } else {
             $data = [
                'size' => htmlspecialchars($this->input->post('size')),
            ];

            $this->mmodel->addSize($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('size');
        }
    }

    public function deleteSize($id) {
        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->mmodel->deleteSize($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('size');
    }

    public function editSize($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}
        
        $this->form_validation->set_rules(
            'size', 
            'Size', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => 'Form Edit Size',
                'data' => $this->mmodel->getSizeById($id),
            ];

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formEditSize', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'size' => htmlspecialchars($this->input->post('size')),
            ];
            $this->mmodel->actionEditSize($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('size');
        }
    }
}
