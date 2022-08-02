<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('bank_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $content['data'] = $this->bank_model->get();
        $data['content'] = $this->helper->loadView('bank/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('bank/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        if (!empty($_FILES['logo']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/bank';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2040;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('logo'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $logo = $upload['file_name'];
            }
        } else {
            $logo = $this->input->post('old_logo');
        }
        $data['logo_bank'] = $logo;
        $data['name_bank'] = $this->input->post('name_bank');
        $data['account_number'] = $this->input->post('account_number');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->bank_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('bank'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->bank_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('bank'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->bank_model->select($id);
        $data['content'] = $this->helper->loadView('bank/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->bank_model->delete($id);
        redirect(site_url('bank'));
    }
}
