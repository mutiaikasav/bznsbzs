<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('transactions_model');
        $this->load->model('donations_model');

    }

    public function index()
    {
        $content['data_transaction'] = $this->transactions_model->get();
        $content['data_donation'] = $this->donations_model->get();
        $data['content'] = $this->helper->loadView('report', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }
}
