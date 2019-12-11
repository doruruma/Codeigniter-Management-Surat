<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->form_validation->set_error_delimiters("<small class='text-danger'>", "</small>");
	}

	public function index()
	{
		$this->ProfileModel->editProfileValidation();
		if ($this->form_validation->run()) {
			$this->ProfileModel->editProfile();
		} else {
			$data['title'] = 'E-surat | Profile';
			$data['user'] = $this->ProfileModel->getUserById();
			$data['js'] = 'profile.js';
			$this->load->view('templates/header', $data)
				->view('templates/sidebar')
				->view('templates/navbar')
				->view('profile')
				->view('templates/footer');
		}
	}

	public function ubah_password()
	{
		$this->ProfileModel->ubahPasswordValidation();
		if ($this->form_validation->run()) {
			$this->ProfileModel->ubahPassword();
		} else {
			$data['title'] = 'E-surat | Ubah Password';
			$data['user'] = $this->ProfileModel->getUserById();
			$data['js'] = 'ubahPassword.js';
			$this->load->view('templates/header', $data)
				->view('templates/sidebar')
				->view('templates/navbar')
				->view('ubahPassword')
				->view('templates/footer');
		}
	}
}
