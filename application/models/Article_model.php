<?php
class Article_model extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('articles');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('articles', array('id_article'=>$id));
        return $query->result();
    }

    public function select_draft()
    {
        $query = $this->db->get_where('articles', array('status'=>0));
        return $query->result();
    }
    public function select_published()
    {
        $query = $this->db->get_where('articles', array('status'=>1));
        return $query->result();
    }
    public function select_pending()
    {
        $query = $this->db->get_where('articles', array('status'=>2));
        return $query->result();
    }
    public function select_delete()
    {
        $query = $this->db->get_where('articles', array('status'=>3));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('articles', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('articles', $data, array('id_article'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_article', $id);
        $this->db->delete('articles');
    }
}
