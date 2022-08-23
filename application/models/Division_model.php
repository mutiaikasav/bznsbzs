<?php
class Division_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('divisions');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('divisions', array('id'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('divisions', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('divisions', $data, array('id'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id', $id);
        $this->db->delete('divisions');
    }
}