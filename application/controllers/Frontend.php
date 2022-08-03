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

	// Program
	public function program($id)
	{
		$data['content'] = $this->helper->loadView('frontend/section/index');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// Article
	public function article($id, $title)
	{
		$data['content'] = $this->helper->loadView('frontend/article/index');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// Layanan
	public function kalkulator()
	{
		$data['content'] = $this->helper->loadView('frontend/layanan/kalkulator');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function rekening()
	{
		$data['content'] = $this->helper->loadView('frontend/layanan/rekening');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function konfirmasi()
	{
		$data['content'] = $this->helper->loadView('frontend/layanan/konfirmasi');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function bayarzis()
	{
		$data['content'] = $this->helper->loadView('frontend/layanan/bayarzis');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function daftar()
	{
		$data['content'] = $this->helper->loadView('frontend/layanan/donatur');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function kurban()
	{
		$data['content'] = $this->helper->loadView('frontend/layanan/kurban');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// Kategori
	public function kategori($id)
	{
		$data['content'] = $this->helper->loadView('frontend/section/index');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// Media
	public function galeri()
	{
		$data['content'] = $this->helper->loadView('frontend/media/galeri');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function galeri_detail($id, $title)
	{
		$data['content'] = $this->helper->loadView('frontend/media/galeri-detail');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function publikasi()
	{
		$data['content'] = $this->helper->loadView('frontend/media/publikasi');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// User
	public function login()
	{
		$data['content'] = $this->helper->loadView('frontend/user/login');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function register()
	{
		$data['content'] = $this->helper->loadView('frontend/user/register');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function forgot()
	{
		$data['content'] = $this->helper->loadView('frontend/user/forgot');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function change_password()
	{
		$data['content'] = $this->helper->loadView('frontend/user/change');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function profile()
	{
		$data['content'] = $this->helper->loadView('frontend/user/profile');
        return $this->load->view('frontend/template', $data, TRUE);
	}
}
