<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zakat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('zakat_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['title'] = 'Tentang Zakat';
        $content['data'] = $this->zakat_model->get();
        $data['content'] = $this->helper->loadView('zakat/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $content['article'] = $this->zakat_model->get();
        $data['content'] = $this->helper->loadView('zakat/form', $content, TRUE);
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
        $related = implode(", ",$this->input->post('related_articles'));
        $data['related_articles'] = $related;
        $others = implode(", ",$this->input->post('others_articles'));
        $data['others_articles'] = $others;
        $data['slug'] = str_replace(' ', '-', strtolower($this->input->post('title')));
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->zakat_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('zakat'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->zakat_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('zakat'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['article'] = $this->zakat_model->get();
        $content['data'] = $this->zakat_model->select($id);
        $data['content'] = $this->helper->loadView('zakat/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->zakat_model->delete($id);
        $this->session->set_flashdata('flashSimpan','Artikel Berhasil dihapus', 'success');
        redirect(site_url('zakat'));
    }
}
