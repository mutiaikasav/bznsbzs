<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('publication_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
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
        $content['category'] = $this->publication_model->get_category();
        $data['content'] = $this->helper->loadView('publication/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        if (!empty($_FILES['content_publication']['name'])) {
            # code...
            $config['upload_path']          = './assets/upload';
            $config['allowed_types']        = 'pdf|doc|docx|xls|xlxs|jpg|jpeg';
            $config['max_size']             = 102400;
            // $config['max_width']            = 2048;
            // $config['max_height']           = 1024;
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('content_publication'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
            }
            else
            {
                $upload = $this->upload->data();
                $content_publication = $upload['file_name'];
            }
        } else {
            $content_publication = $this->input->post('old_content_publication');
        }
        $data['content_publication'] = $content_publication;
        $data['title_publication'] = $this->input->post('title_publication');
        $data['description_publication'] = $this->input->post('description_publication');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->publication_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('publication'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->publication_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('publication'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['category'] = $this->publication_model->get_category();
        $content['data'] = $this->publication_model->select($id);
        $data['content'] = $this->helper->loadView('publication/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->publication_model->delete($id);
        redirect(site_url('publication'));
    }

    public function category()
    {
        $content['data'] = $this->publication_model->get_category();
        $data['content'] = $this->helper->loadView('publication/category', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add_category()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('publication/category-form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save_category()
    {
        $id = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->publication_model->update_category($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('publication-category'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->publication_model->insert_category($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('publication-category'));
        }
    }

    public function edit_category($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->publication_model->select_category($id);
        $data['content'] = $this->helper->loadView('publication/category-form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete_category($id)
    {
        $this->publication_model->delete_category($id);
        redirect(site_url('publication-category'));
    }
}
