<?php
class Gallery_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('gallery', array('id_gallery'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('gallery', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('gallery', $data, array('id_gallery'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_gallery', $id);
        $this->db->delete('gallery');
    }
}