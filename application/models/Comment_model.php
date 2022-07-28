<?php
class Comment_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('comments');
        return $query->result();
    }
}