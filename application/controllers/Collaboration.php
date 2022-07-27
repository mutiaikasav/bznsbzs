<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collaboration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('collaboration_model');
    }

    public function index()
    {
        $content['data'] = $this->collaboration_model->get();
        $data['content'] = $this->helper->loadView('collaboration/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('collaboration/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        // $data['logo_collab'] = $this->input->post('logo_collab');
        $data['name_collab'] = $this->input->post('name_collab');
        $data['link'] = $this->input->post('link');
        $data['description_collab'] = $this->input->post('description_collab');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->collaboration_model->update($id, $data);
            redirect('../../collaboration');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->collaboration_model->insert($data);
            redirect('../../collaboration-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->collaboration_model->select($id);
        $data['content'] = $this->helper->loadView('collaboration/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->collaboration_model->delete($id);
        redirect('../../collaboration');
    }
}
