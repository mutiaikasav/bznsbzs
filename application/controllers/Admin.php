<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin_model');
        $this->load->model('role_model');
    }

    public function index()
    {
        $content['data'] = $this->admin_model->get();
        $data['content'] = $this->helper->loadView('admin/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $content['role'] = $this->role_model->get();
        $data['content'] = $this->helper->loadView('admin/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $data['nik'] = $this->input->post('nik');
        $data['gender'] = $this->input->post('gender');
        $data['address'] = $this->input->post('address');
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');
        // $data['password'] = $this->input->post('password');
        $data['role'] = $this->input->post('role');
        $data['phone'] = $this->input->post('phone');
        // $data['photo'] = $this->input->post('photo');

        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->admin_model->update($id, $data);
            redirect('../../admin');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->admin_model->insert($data);
            redirect('../../admin-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['role'] = $this->role_model->get();
        $content['data'] = $this->admin_model->select($id);
        $data['content'] = $this->helper->loadView('admin/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->admin_model->delete($id);
        redirect('../../admin');
    }
}
