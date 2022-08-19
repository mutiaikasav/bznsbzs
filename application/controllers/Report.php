<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('report_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['data'] = $this->report_model->get();
        $data['content'] = $this->helper->loadView('report/report', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('report/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $data['periode'] = $this->input->post('periode');
        $data['sum_zakat'] = $this->input->post('sum_zakat');
        $data['sum_infak'] = $this->input->post('sum_infak');
        $data['total'] = $this->input->post('total');
        $data['zakat_prov'] = $this->input->post('zakat_prov');
        $data['zakat_jakpus'] = $this->input->post('zakat_jakpus');
        $data['zakat_jakut'] = $this->input->post('zakat_jakut');
        $data['zakat_jakbar'] = $this->input->post('zakat_jakbar');
        $data['zakat_jaksel'] = $this->input->post('zakat_jaksel');
        $data['zakat_jaktim'] = $this->input->post('zakat_jaktim');
        $data['zakat_pulauseribu'] = $this->input->post('zakat_pulauseribu');
        $data['infak_prov'] = $this->input->post('infak_prov');
        $data['infak_jakpus'] = $this->input->post('infak_jakpus');
        $data['infak_jakut'] = $this->input->post('infak_jakut');
        $data['infak_jakbar'] = $this->input->post('infak_jakbar');
        $data['infak_jaksel'] = $this->input->post('infak_jaksel');
        $data['infak_jaktim'] = $this->input->post('infak_jaktim');
        $data['infak_pulauseribu'] = $this->input->post('infak_pulauseribu');
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->report_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('report'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->report_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('report'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->report_model->select($id);
        $data['content'] = $this->helper->loadView('report/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->report_model->delete($id);
        redirect(site_url('report'));
    }
}
