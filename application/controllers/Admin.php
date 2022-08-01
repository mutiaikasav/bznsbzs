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
        if (!empty($this->input->post('password'))) {
            $data['password'] = md5($this->input->post('password'));
        }
        $data['role'] = $this->input->post('role');
        $data['phone'] = $this->input->post('phone');
        if (!empty($_FILES['photo']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/admin';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 102400;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
            $config['file_name']            = 'admin';
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('photo'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $photo = $upload['file_name'];
            }
        } else {
            $photo = $this->input->post('old_photo');
        }
        $data['photo'] = $photo;

        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->admin_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('admin'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->admin_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('admin'));
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
        redirect(site_url('admin'));
    }
}
