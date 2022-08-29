<?php
class Comment_model extends CI_Model {
    public function get()
    {
        $this->db->join('articles', 'articles.id_article = comments.id_article', 'left');
        $this->db->select('comments.*, articles.title');
        $query = $this->db->get('comments');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('comments', array('id_comment'=>$id));
        return $query->result();
    }

    public function select_article($id)
    {
        $this->db->order_by("id_comment", "desc");
        $this->db->join('users', 'users.id_user = comments.id_user', 'left');
        $this->db->select('users.name_user, users.photo, comments.*');
        $query = $this->db->get_where('comments', array('id_article'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('comments', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('comments', $data, array('id_comment'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_comment', $id);
        $this->db->delete('comments');
    }
}