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
            redirect(site_url('cms'));
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
        $types = $this->input->post('type');
        $i= 1;
        foreach ($types as $key => $type) {
            $data['id_content'] = $this->input->post('id'.$i);
            $data['type'] = $type;
            $data['order_to'] = $key+1;
            $data['image'] = $this->input->post('image'.$i);
            $data['title'] = $this->input->post('title_input'.$i);
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->headline_model->insert($data);
            $i++;
        }
        $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
        redirect(site_url('headline'));
    }

    public function edit()
    {
        $type = $this->input->post('type');

        $id1 = $this->input->post('idheadline1');
        $data1['id_content'] = $this->input->post('id1');
        $data1['type'] = $type[0];
        $data1['order_to'] = 1;
        $data1['image'] = $this->input->post('image1');
        $data1['title'] = $this->input->post('title_input1');
        $data1['updated_at'] = date("Y-m-d H:i:s");
        $data1['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id1, $data1);

        $id2 = $this->input->post('idheadline2');
        $data2['id_content'] = $this->input->post('id2');
        $data2['type'] = $type[1];
        $data2['order_to'] = 2;
        $data2['image'] = $this->input->post('image2');
        $data2['title'] = $this->input->post('title_input2');
        $data2['updated_at'] = date("Y-m-d H:i:s");
        $data2['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id2, $data2);

        $id3 = $this->input->post('idheadline3');
        $data3['id_content'] = $this->input->post('id3');
        $data3['type'] = $type[2];
        $data3['order_to'] = 3;
        $data3['image'] = $this->input->post('image3');
        $data3['title'] = $this->input->post('title_input3');
        $data3['updated_at'] = date("Y-m-d H:i:s");
        $data3['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id3, $data3);

        $id4 = $this->input->post('idheadline4');
        $data4['id_content'] = $this->input->post('id4');
        $data4['type'] = $type[3];
        $data4['order_to'] = 4;
        $data4['image'] = $this->input->post('image4');
        $data4['title'] = $this->input->post('title_input4');
        $data4['updated_at'] = date("Y-m-d H:i:s");
        $data4['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id4, $data4);

        $id5 = $this->input->post('idheadline5');
        $data5['id_content'] = $this->input->post('id5');
        $data5['type'] = $type[4];
        $data5['order_to'] = 5;
        $data5['image'] = $this->input->post('image5');
        $data5['title'] = $this->input->post('title_input5');
        $data5['updated_at'] = date("Y-m-d H:i:s");
        $data5['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id5, $data5);

        $id6 = $this->input->post('idheadline6');
        $data6['id_content'] = $this->input->post('id6');
        $data6['type'] = $type[5];
        $data6['order_to'] = 6;
        $data6['image'] = $this->input->post('image6');
        $data6['title'] = $this->input->post('title_input6');
        $data6['updated_at'] = date("Y-m-d H:i:s");
        $data6['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id6, $data6);

        $id7 = $this->input->post('idheadline7');
        $data7['id_content'] = $this->input->post('id7');
        $data7['type'] = $type[6];
        $data7['order_to'] = 7;
        $data7['image'] = $this->input->post('image7');
        $data7['title'] = $this->input->post('title_input7');
        $data7['updated_at'] = date("Y-m-d H:i:s");
        $data7['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id7, $data7);

        $id8 = $this->input->post('idheadline8');
        $data8['id_content'] = $this->input->post('id8');
        $data8['type'] = $type[7];
        $data8['order_to'] = 8;
        $data8['image'] = $this->input->post('image8');
        $data8['title'] = $this->input->post('title_input8');
        $data8['updated_at'] = date("Y-m-d H:i:s");
        $data8['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id8, $data8);

        $id9 = $this->input->post('idheadline9');
        $data9['id_content'] = $this->input->post('id9');
        $data9['type'] = $type[8];
        $data9['order_to'] = 9;
        $data9['image'] = $this->input->post('image9');
        $data9['title'] = $this->input->post('title_input9');
        $data9['updated_at'] = date("Y-m-d H:i:s");
        $data9['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id9, $data9);

        $id10 = $this->input->post('idheadline10');
        $data10['id_content'] = $this->input->post('id10');
        $data10['type'] = $type[9];
        $data10['order_to'] = 10;
        $data10['image'] = $this->input->post('image10');
        $data10['title'] = $this->input->post('title_input10');
        $data10['updated_at'] = date("Y-m-d H:i:s");
        $data10['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id10, $data10);

        // $i = 1;
        // foreach ($types as $key => $type) {
        //     $data['id_content'] = $this->input->post('id'.$i);
        //     $data['type'] = $type;
        //     $data['order_to'] = $i+1;
        //     $data['image'] = $this->input->post('image'.$i);
        //     $data['title'] = $this->input->post('title_input'.$i);
        //     $data['created_at'] = date("Y-m-d H:i:s");
        //     $data['created_by'] = $this->session->userdata('id');
        //     $this->headline_model->update($this->input->post('id'.$i), $data);
        //     $i++;
        // }
        $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
        redirect(site_url('headline'));
    }

    public function delete($id)
    {
        $data['id_content'] = '';
        $data['type'] = '';
        $data['image'] = '';
        $data['title'] = '';
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['updated_by'] = $this->session->userdata('id');
        $this->headline_model->update($id, $data);
        $this->session->set_flashdata('flashSimpan','Headline berhasil dihapus', 'success');
        redirect(site_url('headline'));
    }
}