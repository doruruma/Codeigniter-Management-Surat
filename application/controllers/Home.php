<?php

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userMudebi) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'E-surat | Home';
		$data['user'] = $this->ProfileModel->getUserById();
		$data['js'] = 'home.js';
		$this->load->view('templates/header', $data)
			->view('templates/sidebar')
			->view('templates/navbar')
			->view('home')
			->view('templates/footer');
	}
}
