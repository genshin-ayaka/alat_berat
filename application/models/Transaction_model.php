<?php
class Transaction_model extends CI_Model
{

    public function get_transactions()
    {
        $this->db->select('tbltransaksi.*, tblpenyewa.nama_penyewa AS nama_penyewa, tblalat.Merk AS nama_alat');
        $this->db->from('tbltransaksi');
        $this->db->join('tblpenyewa', 'tblpenyewa.id = tbltransaksi.idpenyewa');
        $this->db->join('tblalat', 'tblalat.id = tbltransaksi.idalat');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_transaction($id)
    {
        $this->db->select('tbltransaksi.*, tblpenyewa.nama_penyewa AS nama_penyewa, tblalat.Merk AS nama_alat');
        $this->db->from('tbltransaksi');
        $this->db->join('tblpenyewa', 'tblpenyewa.id = tbltransaksi.idpenyewa');
        $this->db->join('tblalat', 'tblalat.id = tbltransaksi.idalat');
        $this->db->where('tbltransaksi.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function add_transaction($data)
    {
        $this->db->insert('tbltransaksi', $data);
        return $this->db->insert_id();
    }

    public function update_transaction($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tbltransaksi', $data);
    }

    public function delete_transaction($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbltransaksi');
    }

}