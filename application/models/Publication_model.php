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
}