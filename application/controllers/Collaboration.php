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
        if (!empty($_FILES['logo_collab']['name'])) {
            # code...
            $config['upload_path']          = './assets/img/collab';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2040;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('logo_collab'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $logo_collab = $upload['file_name'];
            }
        } else {
            $logo_collab = $this->input->post('old_logo');
        }
        $data['logo_collab'] = $logo_collab;
        $data['name_collab'] = $this->input->post('name_collab');
        $data['link'] = $this->input->post('link');
        $data['description_collab'] = $this->input->post('description_collab');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = '1';
            $this->collaboration_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('collaboration'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = '1';
            $this->collaboration_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('collaboration'));
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
        redirect(site_url('collaboration'));
    }
}
