<?php
class Publication_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('publications');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('publications', array('id_publication'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('publications', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('publications', $data, array('id_publication'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_publication', $id);
        $this->db->delete('publications');
    }

    public function get_category()
    {
        $query = $this->db->get('category_publication');
        return $query->result();
    }

    public function select_category($id)
    {
        $query = $this->db->get_where('category_publication', array('id'=>$id));
        return $query->result();
    }

    public function insert_category($data)
    {
        $this->db->insert('category_publication', $data);
    }

    public function update_category($id, $data)
    {   
        $this->db->update('category_publication', $data, array('id'=>$id));
    }

    public function delete_category($id  )
    {
        $this->db->where('id', $id);
        $this->db->delete('category_publication');
    }
}