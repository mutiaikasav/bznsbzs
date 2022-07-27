<?php
class Program_model extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('programs');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('programs', array('id_program'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('programs', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('programs', $data, array('id_program'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_program', $id);
        $this->db->delete('programs');
    }
}
