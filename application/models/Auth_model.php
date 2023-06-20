<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where('tbladmin', array('username' => $username, 'password' => $password));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_admin()
    {
        return $this->db->get('tbladmin')->result();
    }

    public function get_equipment($id)
    {
        return $this->db->get_where('tbladmin', ['id' => $id])->row();
    }

    public function register($data)
    {
        return $this->db->insert('tbladmin', $data);
    }

    public function delete_admin($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbladmin');
    }

    public function update_admin($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tbladmin', $data);
    }
}
?>