<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }

	public function index()
	{
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $data = $this->mmodel->getUserByUsername($username);

        // $p = password_hash("admin", PASSWORD_DEFAULT);
        // echo $p;
        // die;

        $this->form_validation->set_rules('username', 'Username', 'required',
            [
                'required' => 'username tidak kosong!',
            ]
            );
        $this->form_validation->set_rules('password', 'Password', 'required',
            [
                'required' => 'password tidak kosong!',
            ]
            );

        if($this->form_validation->run() == false) {
            $data = [
                'header' => 'Login',
            ];
    
            $this->load->view('templates/header');
            $this->load->view('auth', $data);
        } else {
            if($data) {
                if($username == $data['username']) {
                    if(password_verify($password, $data['password'])) {
                        $dataUser = [
                            'username' => $data['username'],
                            'rule' => $data['rule'],
                        ];
                        $this->session->set_userdata($dataUser);
                        if($this->session->userdata('rule') == 2) {
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">username dan password benar!</div>');
                            redirect('dashboard');
                        } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">username dan password benar!</div>');
                            redirect('pimpinan/dashboard');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username dan password salah!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username dan password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username dan password salah!</div>');
                redirect('auth');
            }
        }
	}

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('rule');
        
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">anda berhasil logout!</div>');
        redirect('auth');
    }
}