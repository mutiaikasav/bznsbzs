<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {   
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('login'));
        }
        $data['content'] = $this->helper->loadView('dashboard');
        return $this->load->view('template', $data, TRUE);
    }
}