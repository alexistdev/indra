<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa extends CI_Controller
{

	public $form_validation;
	public $Mmodel;
	public $email;
	public $session;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->model('Mmodel');
		$this->load->library('form_validation');
	}

	public function email_check($str)
	{
		$cekEmail = $this->Mmodel->cekEmail($str)->num_rows();
		if ($cekEmail != 0)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('email_check', '{field} tidak terdaftar');
			return FALSE;
		}
	}

	public function index()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|valid_email|required|callback_email_check',
			[
				'required' => 'Anda harus memasukkan email terlebih dahulu!',
				'valid_email' => 'Silahkan masukkan email yang valid!',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data = [
				'header' => 'Lupa password',
			];
			$this->load->view('templates/header');
			$this->load->view('lupa', $data);
		} else {
			$email = $this->input->post('email', TRUE);
			$kode = $this->kodegenerator();
			$idUser = $this->Mmodel->cekEmail($email)->row()->id;
			/* Simpan token */
			$this->Mmodel->addToken($idUser,$kode);
			/* Mengirimkan email reset password */

			$this->load->config('email');
			$this->load->library('email');
			$from = $this->config->item('smtp_user');
			$to = $email;
			$subject = "Reset Password";
			$message = "
               Anda baru saja melakukan reset password
               Silahkan klik link berikut untuk mengganti password anda:
               ". base_url('lupa_password/'.$kode)." 
               Regards
               Admin
      		";

			$this->email->set_newline("\r\n");
			$this->email->from($from);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);
			if ($this->email->send()) {
				$data = [
					'header' => 'Lupa password',
				];
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Link lupa password dikirimkan lewat email, silahkan cek folder spam!</div>');
				$this->load->view('templates/header');
				$this->load->view('lupa', $data);
			} else {
//				show_error($this->email->print_debugger());
				redirect('auth');
			}
		}
	}

	public function reset($id=null)
	{
		if($id == null || $id == ''){
			redirect('auth');
		}else{
			//cek token
			$dataToken = $this->Mmodel->cekToken($id);
			if($dataToken->num_rows() != 0){
				$this->form_validation->set_rules(
					'password',
					'Password',
					'trim|required',
					[
						'required' => 'Anda harus memasukkan password terlebih dahulu!',
					]
				);
				$this->form_validation->set_rules(
					'password2',
					'Password',
					'trim|required|matches[password]',
					[
						'required' => 'Anda harus memasukkan password terlebih dahulu!',
						'matches' => 'Password tidak sama!',
					]
				);
				$this->form_validation->set_error_delimiters('<span class="text-danger" >', '</span>');
				if ($this->form_validation->run() === false) {
					$data = [
						'header' => 'Reset Password',
						'token' => $id,
					];
					$this->load->view('templates/header');
					$this->load->view('reset', $data);
				} else {
					$hashPassword = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);
					$data = [
						'password' => $hashPassword,
						'token' => '',
					];
					$this->Mmodel->updatePassword($dataToken->row()->id,$data);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diperbaharui!</div>');
					redirect('auth');
				}
			}else{
				redirect('auth');
			}
		}
	}

	private function kodegenerator($length = 10)
	{
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}

}
