<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {   
        $data['content'] = $this->helper->loadView('dashboard');
        return $this->load->view('template', $data, TRUE);
    }
}