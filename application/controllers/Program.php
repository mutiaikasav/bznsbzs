<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('program_model');
    }

    public function index()
    {
        $content['data'] = $this->program_model->get();
        $data['content'] = $this->helper->loadView('program/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('program/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        // $data['logo'] = $this->input->post('logo');
        $data['program_name'] = $this->input->post('program_name');
        $data['description_program'] = $this->input->post('description_program');
        // $data['cover_image_program'] = $this->input->post('cover_image_program');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->program_model->update($id, $data);
            redirect('../../program');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->program_model->insert($data);
            redirect('../../program-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->program_model->select($id);
        $data['content'] = $this->helper->loadView('program/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->program_model->delete($id);
        redirect('../../program');
    }
}
