<?php
class Transactions_model extends CI_Model {
    public function get()
    {
        $query = $this->db->get('transactions');
        return $query->result();
    }

    public function select($id)
    {
        $query = $this->db->get_where('transactions', array('id_transaction'=>$id));
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('transactions', $data);
    }

    public function update($id, $data)
    {   
        $this->db->update('transactions', $data, array('id_transaction'=>$id));
    }

    public function delete($id)
    {
        $this->db->where('id_transaction', $id);
        $this->db->delete('transactions');
    }

    public function group_wilayah()
    {
        // $this->db->group_by('wilayah');
        // $this->db->order_by('id_transaction', 'DESC');
        $query = $this->db->get('transactions');
        return $query->result();
    }
}