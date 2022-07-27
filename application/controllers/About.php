<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('about_model');
    }

    public function index()
    {
        $content['data'] = $this->about_model->select(1);
        $data['content'] = $this->helper->loadView('about', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {   
        $data['legalitas'] = $_POST['legalitas'];
        $data['visimisi'] = $_POST['visimisi'];
        $data['struktur'] = $_POST['struktur'];
        $data['organisasi'] = $_POST['organisasi'];
        $data['sejarah'] = $_POST['sejarah'];
        $data['kebijakan'] = $_POST['kebijakan'];

        // $data['created_at'] = date("Y-m-d H:i:s");
        // $data['created_by'] = '1';
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['updated_by'] = '1';

        $this->about_model->update(1,$data);
        redirect('../../about');

    }
}