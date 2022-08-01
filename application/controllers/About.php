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
        $data['legalitas'] = $this->input->post('legalitas');
        $data['visimisi'] = $this->input->post('visimisi');
        $data['struktur'] = $this->input->post('struktur');
        $data['organisasi'] = $this->input->post('organisasi');
        $data['sejarah'] = $this->input->post('sejarah');
        $data['kebijakan'] = $this->input->post('kebijakan');

        // $data['created_at'] = date("Y-m-d H:i:s");
        // $data['created_by'] = '1';
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['updated_by'] = '1';

        $this->about_model->update(1,$data);
        $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
        redirect(site_url('about'));

    }
}