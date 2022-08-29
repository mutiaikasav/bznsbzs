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
        $this->load->model('banner_model');
        $this->load->model('headline_model');
        $this->load->model('article_model');
        $this->load->model('program_model');
        $this->load->model('report_model');
        $this->load->model('gallery_model');
        $this->load->model('publication_model');
        $this->load->model('collaboration_model');

        $banner = $this->banner_model->get();
        $headline = $this->headline_model->get();
        $latest = $this->article_model->select_published();
        $program = $this->program_model->get();
        // $total = $this->transaction_model->total();
        $gallery = $this->gallery_model->get_limit(3);
        $publication = $this->publication_model->get_limit(1);
        $report = $this->report_model->get();
        $collab = $this->collaboration_model->get();

        $wp = array(
            'banner' => $banner,
            'headline' => $headline,
            'latest' => $latest,
            'program' => $program,
            // 'total' => $total,
            'gallery' => $gallery,
            'publication' => $publication,
            'report' => $report,
            'collab' => $collab
        );
        echo json_encode($wp);
    }

    public function division()
    {
        $prov = $this->input->post('province');
        $this->load->model('division_model');
        echo json_encode($this->division_model->select_by_prov($prov));
    }

    public function about()
    {
        $this->load->model('about_model');
        echo json_encode($this->about_model->select(1));
    }

    public function contact()
    {
        $this->load->model('contact_model');
        echo json_encode($this->contact_model->get());
    }

    public function message()
    {
        $data['name'] = $this->input->post('name');
        $data['subject'] = $this->input->post('subject');
        $data['bagian'] = $this->input->post('bagian');
        $data['message'] = $this->input->post('message');
        $data['created_at'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");
        
        $this->load->database();
		$this->load->model('message_model');
		if($this->message_model->insert($data)){
            return true;
        } else {
            return false;
        }
    }

    public function menu()
    {
        $this->load->model('program_model');
        $this->load->model('category_model');

        $program = $this->program_model->get();
        $category = $this->category_model->get();

        $menu = array(
            'program' => $program,
            'category' => $category
        );

        echo json_encode($menu);
    }

    public function artikel()
    {
        $id = $this->input->post('id');
        $category = $this->input->post('category');

        $this->load->model('article_model');
        echo json_encode($this->article_model->select_section($id, $category));
    }

    public function artikel_detail()
    {
        $id = $this->input->post('id');
        $this->load->model('article_model');
        echo json_encode($this->article_model->select($id));
    }

    public function comment()
    {
        $id = $this->input->post('id');
        $this->load->model('comment_model');
        echo json_encode($this->comment_model->select_article($id));
    }

    public function comment_post()
    {
        $id_user = $this->session->userdata('id_user');
        if ($id_user!==null || $id_user!=='') {
            $data['id_user'] = $id_user;
            $data['id_article'] = $this->input->post('id');
            $data['comment'] = $this->input->post('comment');
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['created_by'] = $id_user;
            
            $this->load->database();
            $this->load->model('comment_model');
            if($this->comment_model->insert($data)){
                return array('success'=>true, 'data-src'=>'');
            } else {
                return array('success'=>false, 'data-src'=>'');
            }
        } else {
            return array('success'=>false, 'data-src'=>'');
        }
    }

    public function section()
    {
        $category = $this->input->post('category');
        $title = $this->input->post('title');

        if ($category == 'program') {
            $this->load->model('program_model');
            echo json_encode($this->program_model->select_slug($title));
        } elseif ($category == 'kategori') {
            $this->load->model('category_model');
            echo json_encode($this->category_model->select_slug($title));
        }
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
        $this->load->model('gallery_model');
        echo json_encode($this->gallery_model->get());
    }

    public function galeri_detail()
    {
        $id = $this->input->post('id');
        $this->load->model('gallery_model');
        echo json_encode($this->gallery_model->select($id));
    }

    public function publikasi()
    {
        $this->load->model('publication_model');
        echo json_encode($this->publication_model->get());
    }

    public function user($id)
    {
        
    }
}