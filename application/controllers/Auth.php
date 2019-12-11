<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userMudebi) {
			redirect('home');
		}
		$this->load->model('AuthModel');
		$this->form_validation->set_error_delimiters("<small class='text-danger'>", "</small>")
			->set_rules('username', 'Username', 'required|trim', ['required' => 'Harap isi field ini'])
			->set_rules('password', 'Password', 'required|trim', ['required' => 'Harap isi field ini']);
	}

	public function login()
	{
		if ($this->form_validation->run()) {
			$this->AuthModel->login();
		} else {
			$data['title'] = 'E - Surat | Login';
			$this->load->view('templates/header', $data)
				->view('login')
				->view('templates/footer');
		}
	}

	public function registration()
	{
		
	}

}
