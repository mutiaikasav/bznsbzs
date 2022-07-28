<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('publication_model');
    }

    public function index()
    {
        $content['data'] = $this->publication_model->get();
        $data['content'] = $this->helper->loadView('publication/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('publication/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        // $data['content_publication'] = $this->input->post('content_publication');
        $data['title_publication'] = $this->input->post('title_publication');
        $data['description_publication'] = $this->input->post('description_publication');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->publication_model->update($id, $data);
            redirect('../../publication');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->publication_model->insert($data);
            redirect('../../publication-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->publication_model->select($id);
        $data['content'] = $this->helper->loadView('publication/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->publication_model->delete($id);
        redirect('../../publication');
    }
}
