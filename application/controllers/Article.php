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
        $content['article'] = $this->article_model->select_published();
        $data['content'] = $this->helper->loadView('article/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function upload()
    {
        $accepted_origins = array("http://bznsbzs.com", "http://103.154.128.18:8392");
        $imageFolder = "assets/img/article/";

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
                header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
            } else {
                header("HTTP/1.1 403 Origin Denied");
                return;
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            header("Access-Control-Allow-Methods: POST, OPTIONS");
            return;
        }

        reset ($_FILES);
        $temp = current($_FILES);
        if (is_uploaded_file($temp['tmp_name'])){
            if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
                header("HTTP/1.1 400 Invalid file name.");
                return;
            }

            if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
                header("HTTP/1.1 400 Invalid extension.");
                return;
            }

            $filetowrite = $imageFolder . $temp['name'];
            move_uploaded_file($temp['tmp_name'], $filetowrite);

            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://";
            $baseurl = $protocol . $_SERVER["HTTP_HOST"] .  "/";

            $config_thumb = array(
                'image_library' => 'gd2',
                'source_image' => './'. $filetowrite,
                'new_image' => './'. $imageFolder .'thumb_'. $temp['name'],
                'maintain_ratio' => TRUE,
                'width' => 124,
                'height' => 122
            );
            
            $this->load->library('image_lib', $config_thumb);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
                exit;                        
            }
            $this->image_lib->clear();
            
            echo json_encode(array('location' => $baseurl . $filetowrite));
        } else {
            header("HTTP/1.1 500 Server Error");
        }
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $category = implode(", ",$this->input->post('category'));
        $data['show_at'] = $category;
        $related = implode(", ",$this->input->post('related_articles'));
        $data['related_articles'] = $related;
        $others = implode(", ",$this->input->post('others_articles'));
        $data['others_articles'] = $others;
        $data['status'] = 0;
        $data['slug'] = str_replace(' ', '-', strtolower($this->input->post('title'))); 
        $cat = $this->input->post('category');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->article_model->update($id, $data);
            $this->article_model->delete_detail($id);
            foreach ($cat as $c) {
                $k = explode("|", $c);
                $set['id_article'] = $id;
                $set['category'] = $k[0];
                $set['id_category'] = $k[1];
                $this->article_model->insert_detail($set);
            }

            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('article-draft'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->article_model->insert($data);
            $insert_id = $this->db->insert_id();
            foreach ($cat as $c) {
                $k = explode("|", $c);
                $set['id_article'] = $insert_id;
                $set['category'] = $k[0];
                $set['id_category'] = $k[1];
                $this->article_model->insert_detail($set);
            }
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('article-draft'));
        }
    }

    public function publish()
    {
        $id = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        $category = implode(", ",$this->input->post('category'));
        $data['show_at'] = $category;
        $related = implode(", ",$this->input->post('related_articles'));
        $data['related_articles'] = $related;
        $others = implode(", ",$this->input->post('others_articles'));
        $data['others_articles'] = $others;
        $data['status'] = 1;
        $data['slug'] = str_replace(' ', '-', strtolower($this->input->post('title'))); 
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->article_model->update($id, $data);
            // $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            // redirect(site_url('article'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $data['published_at'] = date("Y-m-d H:i:s");
            $this->article_model->insert($data);
            // $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            // redirect(site_url('article'));
        }
    }

    public function edit($id)
    {
        $this->load->model('category_model');
        $this->load->model('program_model');

        $content['category'] = $this->category_model->get();
        $content['program'] = $this->program_model->get();
        $content['title'] = 'Ubah';
        $content['article'] = $this->article_model->select_published();
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

    public function comment_delete($id)
    {
        $data['status'] = 0; //nonaktif
        $this->comment_model->update($id, $data);
        $this->session->set_flashdata('flashSimpan','Komentar Berhasil dihapus', 'success');
        redirect(site_url('comments'));
    }

    public function comment_show($id)
    {
        $data['status'] = 1; //aktif
        $this->comment_model->update($id, $data);
        $this->session->set_flashdata('flashSimpan','Komentar Berhasil ditampilkan', 'success');
        redirect(site_url('comments'));
    }
}
