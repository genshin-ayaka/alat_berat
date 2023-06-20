<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_message('required', 'Kolom {field} harus diisi.');


		if ($this->form_validation->run() == FALSE) {
			// Menampilkan kembali modal saat form tidak valid
			$this->load->view('home', ['show_modal' => true]);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($this->auth_model->login($username, $password)) {
				redirect('/dashboard');
			} else {
				// Jika login gagal, tampilkan pesan error dan buka kembali modal
				$this->session->set_flashdata('error', 'Username atau password salah');
				$this->load->view('home', ['show_modal' => true]);
			}
		}
	}
}
?>