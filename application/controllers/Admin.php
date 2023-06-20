<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->helper('url');
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}


	public function index()
	{
		$data['admins'] = $this->Auth_model->get_admin();
		$this->load->view('admin/admin', $data);
	}

	public function delete($id)
	{
		$this->Auth_model->delete_admin($id);
		redirect('admin');
	}

	public function create()
	{
		$this->load->view('admin/admin-form');
	}

	public function store()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('admin/admin-form');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->Auth_model->register($data);

			redirect('admin');
		}
	}

	public function edit($id)
	{
		$data['is_edit'] = true;
		$data['admin'] = $this->Auth_model->get_admin($id);
		$this->load->view('admin/admin-form', $data);
	}

	public function update($id)
	{
		// Validasi input form
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$data['admin'] = $this->Auth_model->get_admin($id);
			$this->load->view('admin/edit_admin', $data);
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->Auth_model->update_admin($id, $data);

			redirect('admin');
		}
	}
}