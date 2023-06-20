<?php
class Tenants extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Tenants_model');
    }

    public function index()
    {
        $data['tenants'] = $this->Tenants_model->get_all_tenants();
        $this->load->view('admin/tenants', $data);
    }

    public function create()
    {
        $this->load->view('admin/tenants-form');
    }

    public function store()
    {
        $data = array(
            'nama_penyewa' => $this->input->post('nama_penyewa'),
            'usia' => $this->input->post('usia'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'cperson' => $this->input->post('cperson'),
            'perusahaan' => $this->input->post('perusahaan')
        );

        $this->Tenants_model->insert_tenant($data);
        redirect('tenants');
    }

    public function edit($id)
    {
        $data['is_edit'] = true;
        $data['tenant'] = $this->Tenants_model->get_tenant_by_id($id);
        $this->load->view('admin/tenants-form', $data);
    }

    public function update($id)
    {
        $data = array(
            'nama_penyewa' => $this->input->post('nama_penyewa'),
            'usia' => $this->input->post('usia'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'cperson' => $this->input->post('cperson'),
            'perusahaan' => $this->input->post('perusahaan')
        );

        $this->Tenants_model->update_tenant($id, $data);
        redirect('tenants');
    }

    public function delete($id)
    {
        $this->Tenants_model->delete_tenant($id);
        redirect('tenants');
    }
}
?>