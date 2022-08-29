<?php
class Message_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('messages');
        return $query->result();
    }

    public function get_latest()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('messages');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('messages', array('id'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('messages', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('messages', $data, array('id'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id', $id);
        $this->db->delete('messages');
    }
}