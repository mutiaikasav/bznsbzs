<?php
class Report_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('report');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('report', array('id'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('report', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('report', $data, array('id'=>$id));
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('report');
    }
}