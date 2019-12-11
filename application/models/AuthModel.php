<?php

class AuthModel extends CI_Model
{

	public function login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$row = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($row) {
			if (password_verify($password, $row['password'])) {
				$data = [
					'userMudebi' => [
						'id' => $row['id']
					]
				];
				$this->session->set_userdata($data);
				redirect('home');
			} else {
				flashalert('Password tidak valid', 'error');
				redirect('auth/login');
			}
		} else {
			flashalert('Username tidak valid', 'error');
			redirect('auth/login');
		}
	}

	public function registration()
	{ 
		
	}

}
