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
    }

    public function index()
    {
        $content['data'] = $this->article_model->select_published();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function draft()
    {
        $content['data'] = $this->article_model->select_draft();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function pending()
    {
        $content['data'] = $this->article_model->select_pending();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function hide()
    {
        $content['data'] = $this->article_model->select_delete();
        $data['content'] = $this->helper->loadView('article/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('article/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        // $data['logo_collab'] = $this->input->post('logo_collab');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $data['show_at'] = $this->input->post('category');
        $data['related_articles'] = $this->input->post('related_articles');
        $data['others_articles'] = $this->input->post('others_articles');
        $data['status'] = 0;
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->article_model->update($id, $data);
            redirect('../../article');
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->article_model->insert($data);
            redirect('../../article-add');
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->article_model->select($id);
        $data['content'] = $this->helper->loadView('article/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $data['status'] = 3;
        $this->article_model->update($id, $data);
        redirect('../../article');
    }

    public function comments()
    {
        $content['data'] = $this->comment_model->get();
        $data['content'] = $this->helper->loadView('comments', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }
}
