<?php
class Bank_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('bank_accounts');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('bank_accounts', array('id_bank_account'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('bank_accounts', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('bank_accounts', $data, array('id_bank_account'=>$id));
    }

    public function delete($id  )
    {
        $this->db->where('id_bank_account', $id);
        $this->db->delete('bank_accounts');
    }
}