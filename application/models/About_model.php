<?php
class About_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('about_us');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('about_us', array('id'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('about_us', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('about_us', $data, array('id'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id', $id);
        $this->db->delete('about_us');
    }
}