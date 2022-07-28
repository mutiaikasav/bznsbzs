<?php
class Donations_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('donations');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('donations', array('id_donation'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('donations', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('donations', $data, array('id_donation'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_donation', $id);
        $this->db->delete('donations');
    }
}