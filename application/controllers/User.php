<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
    }

    public function index()
    {
        $content['data'] = $this->user_model->get();
        $data['content'] = $this->helper->loadView('user/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('user/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data['name_user'] = $this->input->post('name_user');
        $data['username'] = $this->input->post('username');
        // $data['password'] = $this->input->post('password');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        // $data['photo'] = $this->input->post('photo');
        $data['panggilan'] = $this->input->post('panggilan');
        $data['phone'] = $this->input->post('phone');

        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->user_model->update($id, $data);
            redirect('../../user');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->user_model->insert($data);
            redirect('../../user-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->user_model->select($id);
        $data['content'] = $this->helper->loadView('user/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->user_model->delete($id);
        redirect('../../user');
    }
}
