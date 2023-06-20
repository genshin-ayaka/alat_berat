<?php
class Equipments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Equipments_model');
    }

    public function index()
    {
        $data['equipments'] = $this->Equipments_model->get_equipments();
        $this->load->view('admin/equipments', $data);
    }

    public function create()
    {
        $this->load->view('admin/equipments-form');
    }

    public function store()
    {
        $data = array(
            'Merk' => $this->input->post('Merk'),
            'Jenis' => $this->input->post('Jenis'),
            'Harga' => $this->input->post('Harga'),
            'Jumlah' => $this->input->post('Jumlah')
        );

        $this->Equipments_model->insert_equipment($data);
        redirect('equipments');
    }

    public function edit($id)
    {
        $data['is_edit'] = true;
        $data['equipment'] = $this->Equipments_model->get_equipment($id);
        $this->load->view('admin/equipments-form', $data);
    }

    public function update($id)
    {
        $data = array(
            'Merk' => $this->input->post('Merk'),
            'Jenis' => $this->input->post('Jenis'),
            'Harga' => $this->input->post('Harga'),
            'Jumlah' => $this->input->post('Jumlah')
        );

        $this->Equipments_model->update_equipment($id, $data);
        redirect('equipments');
    }

    public function delete($id)
    {
        $this->Equipments_model->delete_equipment($id);
        redirect('equipments');
    }
}
?>