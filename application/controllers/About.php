<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('about_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['data'] = $this->about_model->select(1);
        $data['content'] = $this->helper->loadView('about', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function upload()
    {
        $accepted_origins = array("http://bznsbzs.com", "http://103.154.128.18:8392");
        $imageFolder = "assets/img";

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
            
            echo json_encode(array('location' => $baseurl . $filetowrite));
        } else {
            header("HTTP/1.1 500 Server Error");
        }
    }

    public function save()
    {   
        $data['legalitas'] = $this->input->post('legalitas');
        $data['visimisi'] = $this->input->post('visimisi');
        $data['struktur'] = $this->input->post('struktur');
        $data['organisasi'] = $this->input->post('organisasi');
        $data['sejarah'] = $this->input->post('sejarah');
        $data['kebijakan'] = $this->input->post('kebijakan');

        // $data['created_at'] = date("Y-m-d H:i:s");
        // $data['created_by'] = $this->session->userdata('id');
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['updated_by'] = $this->session->userdata('id');

        $this->about_model->update(1,$data);
        $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
        redirect(site_url('about'));

    }
}