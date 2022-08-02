<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('login'));
        }
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
        $data['password'] = md5($this->input->post('password'));
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        if (!empty($_FILES['photo']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/user';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 102400;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
            $config['file_name']            = 'user';
    
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
        $data['panggilan'] = $this->input->post('panggilan');
        $data['phone'] = $this->input->post('phone');

        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->user_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('user'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->user_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('user'));
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
        redirect(site_url('user'));
    }
}
