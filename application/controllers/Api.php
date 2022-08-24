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
        $this->load->model('headline_model');
        $this->load->model('article_model');
        $this->load->model('program_model');
        $this->load->model('transactions_model');
        $this->load->model('gallery_model');
        $this->load->model('collaboration_model');

        $headline = $this->headline_model->get();
        $latest = $this->article_model->select_published();
        $program = $this->program_model->get();
        // $total = $this->transaction_model->total();
        $gallery = $this->gallery_model->get();
        // $report = $this->transaction_model->report();
        $collab = $this->collaboration_model->get();

        $wp = array(
            'headline' => $headline,
            'latest' => $latest,
            'program' => $program,
            // 'total' => $total,
            'gallery' => $gallery,
            // 'report' => $report,
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
        $this->load->model('article_model');
        echo json_encode($this->article_model->select_published());
    }

    public function artikel_detail()
    {
        $id = $this->input->post('id');
        $this->load->model('article_model');
        echo json_encode($this->article_model->select($id));
    }

    public function section()
    {
        $category = $this->input->post('category');
        $title = $this->input->post('title');

        // $this->load->model('article_model');
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