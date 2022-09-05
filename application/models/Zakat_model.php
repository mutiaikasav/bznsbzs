<?php
class Zakat_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('about_zakat');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('about_zakat', array('id'=>$id));
        return $query->result();
    }

    public function select_slug($slug)
    {
        $query = $this->db->get_where('about_zakat', array('slug'=>$slug));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('about_zakat', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('about_zakat', $data, array('id'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id', $id);
        $this->db->delete('about_zakat');
    }
}