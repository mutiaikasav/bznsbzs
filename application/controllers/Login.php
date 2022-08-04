<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass     = md5($password);
        $login    = $this->admin_model->login($username, $pass);
        if (count($login)===0){
            $this->session->set_flashdata('flashGagal','Username/Password salah', 'error');
            redirect(site_url('login'));
        } else {
            $newdata = array( 
                'id'        => $login[0]->id_admin,
                'name'      => $login[0]->name,
                'photo'     => $login[0]->photo,
                'username'  => $login[0]->username, 
                'email'     => $login[0]->email, 
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);

            $this->session->set_flashdata('flashSimpan','Berhasil Login', 'success');
            redirect(site_url('dashboard'));
        }
    }

    public function signout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username'); 
        $this->session->unset_userdata('name'); 
        $this->session->unset_userdata('logged_in'); 

        redirect(site_url('cms'));
    }
}