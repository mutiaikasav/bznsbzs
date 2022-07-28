<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('gallery_model');
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
        // $data['content_gallery'] = $this->input->post('content_gallery');
        $data['title_gallery'] = $this->input->post('title_gallery');
        $data['description_gallery'] = $this->input->post('description_gallery');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->gallery_model->update($id, $data);
            redirect('../../gallery');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->gallery_model->insert($data);
            redirect('../../gallery-add');
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
        redirect('../../gallery');
    }
}
