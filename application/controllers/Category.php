<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('category_model');
    }

    public function index()
    {
        $content['data'] = $this->category_model->get();
        $data['content'] = $this->helper->loadView('category/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('category/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        // $data['logo'] = $this->input->post('logo');
        $data['category_name'] = $this->input->post('category_name');
        $data['description'] = $this->input->post('description');
        // $data['cover_image'] = $this->input->post('cover_image');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->category_model->update($id, $data);
            redirect('../../category');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->category_model->insert($data);
            redirect('../../category-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->category_model->select($id);
        $data['content'] = $this->helper->loadView('category/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->category_model->delete($id);
        redirect('../../category');
    }
}
