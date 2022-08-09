<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {   
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
        $this->load->database();
        $this->load->model('transactions_model');
        $content['wilayah'] = $this->transactions_model->group_wilayah();
        $data['content'] = $this->helper->loadView('dashboard', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }
}