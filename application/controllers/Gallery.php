<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('gallery_model');
        if ($this->session->userdata('logged_in')!==TRUE) {
            redirect(site_url('cms'));
        }
    }

    public function index()
    {
        $content['data'] = $this->gallery_model->get();
        $data['content'] = $this->helper->loadView('gallery/index', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function add()
    {
        $content['title'] = 'Tambah';
        $data['content'] = $this->helper->loadView('gallery/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $slug = str_replace(' ', '-', strtolower($this->input->post('title_gallery')));
        $foto = array();
        $old = $this->input->post('old_content_gallery');
        $old_content = array();
        $count = count($_FILES['content_gallery']['name']);
        for($i=0;$i<$count;$i++){
            $filename = 'img_'.$slug;
            if (!empty($_FILES['content_gallery']['name'][$i])) {
                $_FILES['content']['name'] = $_FILES['content_gallery']['name'][$i];
                $_FILES['content']['type'] = $_FILES['content_gallery']['type'][$i];
                $_FILES['content']['tmp_name'] = $_FILES['content_gallery']['tmp_name'][$i];
                $_FILES['content']['error'] = $_FILES['content_gallery']['error'][$i];
                $_FILES['content']['size'] = $_FILES['content_gallery']['size'][$i];

                $config['upload_path']          = './assets/img/galeri';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 102400;
                // $config['max_width']            = 2048;
                // $config['max_height']           = 1024;
                $config['file_name']            = $filename;                
        
                $this->load->library('upload', $config);
        
                if ( ! $this->upload->do_upload('content'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->upload->display_errors();
                }
                else
                {
                    $upload = $this->upload->data();
                    array_push($foto, $upload['file_name']);
                    
                    // upload thumb
                    $config_thumb = array(
                        'image_library' => 'gd2',
                        'source_image' => './assets/img/galeri/'.$upload['file_name'],
                        'new_image' => './assets/img/galeri/thumb_'.$upload['file_name'],
                        'maintain_ratio' => TRUE,
                        'width' => 251,
                        'height' => 167
                    );
                    
                    $this->load->library('image_lib', $config_thumb);
                    if (!$this->image_lib->resize()) {
                        echo $this->image_lib->display_errors();
                        exit;                        
                    }
                    $this->image_lib->clear();
                    
                    $content_gallery = implode(",",$foto);
                }
            } else {
                array_push($old_content, $old[$i]);
                $content_gallery = implode(",",$old_content);
            }
        }

        $data['title_gallery'] = $this->input->post('title_gallery');
        $data['description_gallery'] = $this->input->post('description_gallery');
        $data['content_gallery'] = $content_gallery;
        $data['video'] = $this->input->post('video');
        $data['slug'] = $slug; 
        
        // update
        if ($id!=null || $id!='') {        
            $data['updated_at'] = date("Y-m-d H:i:s");
            $data['updated_by'] = $this->session->userdata('id');
            $this->gallery_model->update($id, $data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('gallery'));
        } else { // insert
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $this->session->userdata('id');
            $this->gallery_model->insert($data);
            $this->session->set_flashdata('flashSimpan','Data Berhasil disimpan', 'success');
            redirect(site_url('gallery'));
        }
    }

    public function edit($id)
    {
        $content['title'] = 'Ubah';
        $content['data'] = $this->gallery_model->select($id);
        $data['content'] = $this->helper->loadView('gallery/form', $content, TRUE);
        return $this->load->view('template', $data, TRUE);
    }

    public function delete($id)
    {
        $this->gallery_model->delete($id);
        redirect(site_url('gallery'));
    }
}
