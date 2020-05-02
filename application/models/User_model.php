<?php
class User_model extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all_user()
    {
        // $this->db->select("*");
        // $this->db->from("users");
        // $query = $this->db->get();
        // return $query->result();

        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user($id)
    {
        $this->db->from('users');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function set_user($deny)
    {
        return $this->db->insert('users', $deny);
    }

    public function update_user($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('users');
    }

    public function delete_user($id)
    {
        $this->db->from('users');
        $this->db->where('id', $id);
        return $this->db->delete();
    }

}