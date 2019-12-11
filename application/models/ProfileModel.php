<?php

class ProfileModel extends CI_Model
{

	public function getUserById()
	{
		return $this->db->get_where('user', ['id' => $this->session->userMudebi['id']])->row_array();
	}

	public function editProfile()
	{
		$username = $this->input->post('username', true);
		$img = $_FILES['profile']['name'];
		if ($img) {
			$config = [
				'allowed_types' => 'png|jpg|jpeg',
				'max_size' => '2048',
				'upload_path' => './assets/img/profile'
			];
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('profile')) {
				$oldImg = $this->getUserById()['img'];
				if ($oldImg != 'default.png') {
					unlink(FCPATH . 'assets/img/profile/' . $oldImg);
				}
				$newImg = $this->upload->data('file_name');
				$this->db->set('img', $newImg);
			} else {
				flashalert($this->upload->display_errors(), 'error');
				redirect('profile');
			}
		}
		$this->db->set('username', $username)->where('id', $this->session->userMudebi['id'])->update('user');
		flashalert('Berhasil Update Profile', 'success');
		redirect('profile');
	}

	public function ubahPassword()
	{
		$oldPass = $this->input->post('oldPass', true);
		$newPass = $this->input->post('newPass', true);
	}

	function ubahPasswordValidation()
	{
		$this->form_validation->set_rules('oldPass', 'Password Lama', 'required|trim', ['required' => 'Harap isi field ini'])
			->set_rules('newPass', 'Password Baru', 'required|trim|min_length[6]|differs[oldPass]', ['required' => 'Harap isi field ini', 'min_length' => 'Password harus lebih dari 6 karakter'])
			->set_rules('confirmPass', 'Konfirmasi Password', 'matches[newPass]', ['matches' => 'Konfirmasi Password tidak sesuai dengan Password Baru']);
	}

	function editProfileValidation()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Harap Isi Field Username']);
	}
}
