<?php
class Tenants_model extends CI_Model
{
    public function get_all_tenants()
    {
        return $this->db->get('tblpenyewa')->result();
    }

    public function get_tenant_by_id($id)
    {
        return $this->db->get_where('tblpenyewa', ['id' => $id])->row();
    }

    public function insert_tenant($data)
    {
        return $this->db->insert('tblpenyewa', $data);
    }

    public function update_tenant($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tblpenyewa', $data);
    }

    public function delete_tenant($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tblpenyewa');
    }
}
?>