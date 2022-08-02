<?php
class Headline_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('headline');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('headline', array('id_headline'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('headline', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('headline', $data, array('id_headline'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_headline', $id);
        $this->db->delete('headline');
    }
}