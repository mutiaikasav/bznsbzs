<?php
class Banner_model extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('banners');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('banners', array('id_banner'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('banners', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('banners', $data, array('id_banner'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_banner', $id);
        $this->db->delete('banners');
    }
}
