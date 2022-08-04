<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        
    }

    public function about()
    {
        $this->load->model('about_model');
        echo json_encode($this->about_model->select(1));
    }

    public function program()
    {
        
    }

    public function artikel()
    {
        
    }

    public function kategori()
    {
        
    }

    public function rekening_zakat()
    {
        $this->load->model('bank_model');
        echo json_encode($this->bank_model->select_category('Rekening Zakat'));
    }

    public function rekening_infak()
    {
        $this->load->model('bank_model');
        echo json_encode($this->bank_model->select_category('Rekening Infak'));
    }

    public function galeri()
    {
        
    }

    public function galeri_detail()
    {
        
    }

    public function publikasi()
    {
        
    }

    public function user($id)
    {
        
    }
}