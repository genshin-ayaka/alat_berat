<?php
class Transaction extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Transaction_model');
        $this->load->model('Equipments_model');
        $this->load->model('Tenants_model');
    }

    public function index()
    {
        $data['transactions'] = $this->Transaction_model->get_transactions();
        $this->load->view('admin/transaction', $data);
    }

    public function create()
    {
        $data['penyewa'] = $this->Tenants_model->get_all_tenants();
        $data['alat'] = $this->Equipments_model->get_equipments();
        $this->load->view('admin/transaction-form', $data);
    }

    public function store()
    {
        $data = array(
            'idpenyewa' => $this->input->post('idpenyewa'),
            'idalat' => $this->input->post('idalat'),
            'tgltransaksi' => $this->input->post('tgltransaksi'),
            'lamasewa' => $this->input->post('lamasewa'),
            'tglbatassewa' => $this->input->post('tglbatassewa'),
            'jmlsewa' => $this->input->post('jmlsewa'),
            'totalbiayasewa' => $this->input->post('totalbiayasewa'),
            'keterlambatan' => $this->input->post('keterlambatan'),
            'denda' => $this->input->post('denda')
        );
        $this->Transaction_model->add_transaction($data);
        redirect('transaction');
    }

    public function edit($id)
    {
        $data['penyewa'] = $this->Tenants_model->get_all_tenants();
        $data['alat'] = $this->Equipments_model->get_equipments();
        $data['transaction'] = $this->Transaction_model->get_transaction($id);
        $this->load->view('admin/transaction-form', $data);
    }

    public function update($id)
    {
        $data = array(
            'idpenyewa' => $this->input->post('idpenyewa'),
            'idalat' => $this->input->post('idalat'),
            'tgltransaksi' => $this->input->post('tgltransaksi'),
            'lamasewa' => $this->input->post('lamasewa'),
            'tglbatassewa' => $this->input->post('tglbatassewa'),
            'jmlsewa' => $this->input->post('jmlsewa'),
            'totalbiayasewa' => $this->input->post('totalbiayasewa'),
            'keterlambatan' => $this->input->post('keterlambatan'),
            'denda' => $this->input->post('denda')
        );

        $this->Transaction_model->update_transaction($id, $data);
        redirect('transaction');
    }

    public function delete($id)
    {
        $this->Transaction_model->delete_transaction($id);
        redirect('transaction');
    }
}