<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Headline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('headline_model');
        $this->load->model('banner_model');
        $this->load->model('article_model');

        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $content['data'] = $this->headline_model->get();
        $content['banner'] = $this->banner_model->get();
        $content['article'] = $this->article_model->get();

        $data['content'] = $this->helper->loadView('headline', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->headline_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('headline'));
        } else { // insert
            $types = $this->input->post('type');
            $i= 1;
            foreach ($types as $key => $type) {
                $data['id_content'] = $this->input->post('id'.$i);
                $data['type'] = $type;
                $data['order_to'] = $key+1;
                $data['created_at'] = date("Y-m-d H:i:s");
                $data['created_by'] = $this->session->userdata('id');
                $this->headline_model->insert($data);
                $i++;
            }
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('headline'));
        }

    }
}