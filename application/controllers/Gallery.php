<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('gallery_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $content['data'] = $this->gallery_model->get();
        $data['content'] = $this->helper->loadView('gallery/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('gallery/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        if (!empty($_FILES['content_gallery']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/galeri';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 102400;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('content_gallery'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $content_gallery = $upload['file_name'];
            }
        } else {
            $content_gallery = $this->input->post('old_content_gallery');
        }
        // echo $content_gallery;
        $data['title_gallery'] = $this->input->post('title_gallery');
        $data['description_gallery'] = $this->input->post('description_gallery');
        $data['content_gallery'] = $content_gallery;
        $data['video'] = $this->input->post('video');
        
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->gallery_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('gallery'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->gallery_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('gallery'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->gallery_model->select($id);
        $data['content'] = $this->helper->loadView('gallery/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->gallery_model->delete($id);
        redirect(site_url('gallery'));
    }
}
