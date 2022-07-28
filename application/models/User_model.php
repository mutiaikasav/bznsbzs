<?php
class User_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('users', array('id_user'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('users', $data, array('id_user'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }
}