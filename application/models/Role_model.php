<?php
class Role_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('roles');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('roles', array('id_role'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('roles', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('roles', $data, array('id_role'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_role', $id);
        $this->db->delete('roles');
    }
}