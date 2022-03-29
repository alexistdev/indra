<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {

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
            'data' => $this->mmodel->getMerk(),
            'header' => 'Merk',
        ];

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('merk', $data);
		$this->load->view('templates/footer');
	}

    public function formAddMerk(){

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'merk', 
            'Merk', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => "Form Add Merk",
            ];
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formAddMerk', $data);
            $this->load->view('templates/footer');
        } else {
             $data = [
                'merk' => htmlspecialchars($this->input->post('merk')),
            ];

            $this->mmodel->addMerk($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('merk');
        }
    }

    public function deleteMerk($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->mmodel->deleteMerk($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('merk');
    }

    public function editMerk($id) {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $this->form_validation->set_rules(
            'merk', 
            'Merk', 
            'required',
            [
                'required' => 'field tidak kosong!',
            ]
        );

        if($this->form_validation->run() == FALSE) {
            $data = [
                'header' => 'Form Edit Merk',
                'data' => $this->mmodel->getMerkById($id),
            ];

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('formEditMerk', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'merk' => htmlspecialchars($this->input->post('merk')),
            ];
            $this->mmodel->actionEditMerk($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('merk');
        }
    }

    public function actionEdit() {

        if (!$this->session->userdata('username')) {
			redirect('auth');
		}

        $id = $this->input->post('id');
        $data = [
            'merk' => htmlspecialchars($this->input->post('merk')),
        ];
        $this->mmodel->actionEditMerk($id, $data);
        redirect('merk');
    }
}
