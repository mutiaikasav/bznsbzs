<?php
class Admin_model extends CI_Model {
    public function get()
    {
        $this->db->join('roles', 'roles.id_role = admins.role', 'left');
        $query = $this->db->get('admins');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('admins', array('id_admin'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('admins', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('admins', $data, array('id_admin'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('admins');
    }

    public function login($username, $pass)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $this->db->join('roles', 'roles.id_role=admins.role','left');
        $query = $this->db->get('admins');
        return $query->result();
    }
}