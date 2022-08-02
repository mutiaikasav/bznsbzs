<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Headline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('headline_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $content['data'] = $this->headline_model->get();
        $data['content'] = $this->helper->loadView('headline', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }
}