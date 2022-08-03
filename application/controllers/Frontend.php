<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data['content'] = $this->helper->loadView('frontend/home/index');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// About Us
	public function legalitas()
	{
		$content['title'] = 'Legalitas';
		$data['content'] = $this->helper->loadView('frontend/about/index', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function visimisi()
	{
		$content['title'] = 'Visi Misi';
		$data['content'] = $this->helper->loadView('frontend/about/index', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function struktur()
	{
		$content['title'] = 'Struktur Organisasi';
		$data['content'] = $this->helper->loadView('frontend/about/index', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function organisasi()
	{
		$content['title'] = 'Organisasi';
		$data['content'] = $this->helper->loadView('frontend/about/index', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function sejarah()
	{
		$content['title'] = 'Sejarah';
		$data['content'] = $this->helper->loadView('frontend/about/index', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}	

	public function hubungi()
	{
		$content['title'] = 'Hubungi Kami';
		$data['content'] = $this->helper->loadView('frontend/about/contact', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function kebijakan()
	{
		$content['title'] = 'Kebijakan Privasi';
		$data['content'] = $this->helper->loadView('frontend/about/index', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}
}
