<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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

        
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|matches[password2]', 
            [
                'required' => 'password tidak kosong!',
                'min_length' => 'minimal 6 karakter',
                'matches' => 'password tidak sama!',
            ]
        );
        $this->form_validation->set_rules('password2', 'Password2', 'required|min_length[3]', 
            [
                'required' => 'password tidak kosong!',
                'min_length' => 'minimal 6 karakter',
            ]
        );

        if($this->form_validation->run() == false) {
    
            $dataUsername = $this->session->userdata('username');
    
            $data = [
                'data' => $this->mmodel->getUserByUsername($dataUsername),
                'header' => 'Setting',
            ];

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('setting', $data);
            $this->load->view('templates/footer');
        } else {

            $dataUsername = $this->session->userdata('username');

            $dataUser = $this->mmodel->getUserByUsername($dataUsername);
            $password = htmlspecialchars($this->input->post('password'));

            if($dataUser['username'] == $dataUsername) {
                $dataUpdate = [
                    "password" => password_hash($password, PASSWORD_DEFAULT),
                ];

                $this->mmodel->updateUser($dataUsername, $dataUpdate);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password berhasil diubah!</div>');
                redirect('setting');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">gagal ubah password!</div>');
            redirect('setting');
            }
        }

	}
}