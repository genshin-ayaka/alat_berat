<?php
class Equipments_model extends CI_Model
{
    public function get_equipments()
    {
        return $this->db->get('tblalat')->result();
    }

    public function get_equipment($id)
    {
        return $this->db->get_where('tblalat', ['id' => $id])->row();
    }
    public function insert_equipment($data)
    {
        return $this->db->insert('tblalat', $data);
    }

    public function update_equipment($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tblalat', $data);
    }

    public function delete_equipment($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tblalat');
    }
}
?>