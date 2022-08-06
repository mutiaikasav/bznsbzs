<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('article_model');
        $this->load->model('comment_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['title'] = 'Publish';
        $content['data'] = $this->article_model->select_published();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function draft()
    {
        $content['title'] = 'Draft';
        $content['data'] = $this->article_model->select_draft();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function pending()
    {
        $content['title'] = 'Schedule';
        $content['data'] = $this->article_model->select_pending();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function hide()
    {
        $content['title'] = 'Delete';
        $content['data'] = $this->article_model->select_delete();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $this->load->model('category_model');
        $this->load->model('program_model');

        $content['category'] = $this->category_model->get();
        $content['program'] = $this->program_model->get();
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('article/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $category = implode(", ",$this->input->post('category'));
        $data['show_at'] = $category;
        $data['related_articles'] = $this->input->post('related_articles');
        $data['others_articles'] = $this->input->post('others_articles');
        $data['status'] = 0;
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->article_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('article'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->article_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('article'));
        }
    }

    public function publish()
    {
        $id = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $category = implode(", ",$this->input->post('category'));
        $data['show_at'] = $category;
        $data['related_articles'] = $this->input->post('related_articles');
        $data['others_articles'] = $this->input->post('others_articles');
        $data['status'] = 1;
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->article_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('article'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $data['published_at'] = date("Y-m-d H:i:s");
            $this->article_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('article'));
        }
    }

    public function edit($id)
    {
        $this->load->model('category_model');
        $this->load->model('program_model');

        $content['category'] = $this->category_model->get();
        $content['program'] = $this->program_model->get();
        $content['title'] = 'Ubah';
        $content['data'] = $this->article_model->select($id);
        $data['content'] = $this->helper->loadView('article/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function publishing($id)
    {
        $data['status'] = 1;
        $data['published_at'] = date("Y-m-d H:i:s");
        $this->article_model->update($id, $data);
        $this->session->set_flashdata('flashSimpan','Artikel Berhasil dipublish', 'success');
        redirect(site_url('article'));
    }

    public function delete($id)
    {
        $data['status'] = 3;
        $this->article_model->update($id, $data);
        $this->session->set_flashdata('flashSimpan','Artikel Berhasil dihapus', 'success');
        redirect(site_url('article'));
    }

    public function comments()
    {
        $content['data'] = $this->comment_model->get();
        $data['content'] = $this->helper->loadView('comments', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }
}
