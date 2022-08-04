<?php
class Category_model extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('categories');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('categories', array('id_category'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('categories', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('categories', $data, array('id_category'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_category', $id);
        $this->db->delete('categories');
    }

    public function select_slug($slug)
    {
        $query = $this->db->get_where('categories', array('slug'=>$slug));
        return $query->result();
    }
}
