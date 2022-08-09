<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('transactions_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['data'] = $this->transactions_model->get();
        $data['content'] = $this->helper->loadView('transaction/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('transaction/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data['kategori'] = $this->input->post('kategori');
        $data['jenis'] = $this->input->post('jenis');
        $data['donatur'] = $this->input->post('donatur');
        $data['jumlah'] = $this->input->post('jumlah');
        $data['pembayaran'] = $this->input->post('pembayaran');
        $data['anonym'] = $this->input->post('anonym');
        $data['unit_kerja'] = $this->input->post('unit_kerja');
        $data['wilayah'] = $this->input->post('wilayah');
        if (!empty($_FILES['bukti']['name'])) {
            $config['upload_path']          = './assets/img/transaksi';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 102400;
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('bukti'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $bukti = $upload['file_name'];
            }
        } else {
            $bukti = $this->input->post('old_bukti');
        }
        $data['bukti_pembayaran'] = $bukti;
        $data['invoice'] = 'DBW'.date('Y').date('m').date('d').$this->helper->generateRandomString(3);
        $data['status'] = 0;
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->transactions_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('transaction'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->transactions_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('transaction'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->transactions_model->select($id);
        $data['content'] = $this->helper->loadView('transaction/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->transactions_model->delete($id);
        redirect(site_url('transaction'));
    }

    public function konfirmasi()
    {
        $id = $this->input->post('id_trans');
        $data['status'] = 2;
        $this->transactions_model->update($id, $data);
        // kirim email
        // kirim wa
        $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
        redirect(site_url('transaction'));
    }
}