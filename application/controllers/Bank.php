<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('bank_model');
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
        // $data['logo_collab'] = $this->input->post('logo_collab');
        $data['name_bank'] = $this->input->post('name_bank');
        $data['account_number'] = $this->input->post('account_number');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->bank_model->update($id, $data);
            redirect('../../bank');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->bank_model->insert($data);
            redirect('../../bank-add');
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
        redirect('../../bank');
    }
}
