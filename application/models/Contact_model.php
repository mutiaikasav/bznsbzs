<?php
class Contact_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('category_contact');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('category_contact', array('id'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('category_contact', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('category_contact', $data, array('id'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id', $id);
        $this->db->delete('category_contact');
    }
}