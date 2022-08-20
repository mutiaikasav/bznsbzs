<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('banner_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['data'] = $this->banner_model->get();
        $data['content'] = $this->helper->loadView('banners/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('banners/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        if (!empty($_FILES['image']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/banner';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 102400;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
            $config['file_name']            = 'banner';
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('image'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $image = $upload['file_name'];
            }
        } else {
            $image = $this->input->post('old_image');
        }
        $data['image'] = $image;
        if (!empty($_FILES['image_mobile']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/banner';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 102400;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
            $config['file_name']            = 'banner-mobile';
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('image_mobile'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload_mobile = $this->upload->data();
                $image_mobile = $upload_mobile['file_name'];
            }
        } else {
            $image_mobile = $this->input->post('old_image_mobile');
        }
        $data['image_mobile'] = $image_mobile;
        $data['link'] = $this->input->post('link');
        $data['description_banner'] = $this->input->post('description_banner');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->banner_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('banner'));

        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->banner_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('banner'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->banner_model->select($id);
        $data['content'] = $this->helper->loadView('banners/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->banner_model->delete($id);
        redirect(site_url('banner'));
    }
}
