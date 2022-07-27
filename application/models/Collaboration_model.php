<?php
class Collaboration_model extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('collaboration');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('collaboration', array('id_collaboration'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('collaboration', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('collaboration', $data, array('id_collaboration'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_collaboration', $id);
        $this->db->delete('collaboration');
    }
}
