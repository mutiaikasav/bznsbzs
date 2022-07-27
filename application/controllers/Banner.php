<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('banner_model');
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
        // $data['image'] = $this->input->post('image');
        $data['link'] = $this->input->post('link');
        $data['description_banner'] = $this->input->post('description_banner');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->banner_model->update($id, $data);
            redirect('../../banner');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->banner_model->insert($data);
            redirect('../../banner-add');
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
        redirect('../../banner');
    }
}
