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
		$content['widget'] = $this->recaptcha->getWidget();
		$content['script'] = $this->recaptcha->getScriptTag();
		$data['content'] = $this->helper->loadView('frontend/layanan/bayarzis', $content, TRUE);
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

	public function laporan()
	{
		$data['content'] = $this->helper->loadView('frontend/media/laporan');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	// User
	public function login()
	{
		$content['widget'] = $this->recaptcha->getWidget();
		$content['script'] = $this->recaptcha->getScriptTag();
		$data['content'] = $this->helper->loadView('frontend/user/login', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function login_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass     = md5($password);
        $this->load->database();
		$this->load->model('user_model');
        $login    = $this->user_model->login($username, $pass);
        if (count($login)===0){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Username/Password salah</div>');
            redirect(site_url('login'));
        } else {
            $newdata = array( 
                'id_user'        => $login[0]->id_user,
                'name_user'      => $login[0]->name_user ,
                'photo_user'     => $login[0]->photo,
                'username_user'  => $login[0]->username, 
                'email_user'     => $login[0]->email, 
                'logged_in_user' => TRUE
            );
            $this->session->set_userdata($newdata);

            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Berhasil Login</div>');
            redirect(site_url('profile'));
        }
    }

	public function register()
	{
		$content['widget'] = $this->recaptcha->getWidget();
		$content['script'] = $this->recaptcha->getScriptTag();
		$data['content'] = $this->helper->loadView('frontend/user/register', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function register_user()
	{
		$password =$this->input->post('password');
		$repassword =$this->input->post('repassword');
		if ($password!=$repassword) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Password yang anda masukkan berbeda. Mohon masukkan Password yang sama dengan Ulangi Password.</div>');
        	redirect(site_url('register'));
		}
		$data['name_user'] = $this->input->post('name_user');
        $data['email'] = $this->input->post('email');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
		$this->load->database();
		$this->load->model('user_model');
		$this->user_model->insert($data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Anda telah terdaftar dalam Sistem. Silahkan login dengan username dan password yang sudah anda daftarkan.</div>');
        redirect(site_url('register'));
	}

	public function forgot()
	{
		$content['widget'] = $this->recaptcha->getWidget();
		$content['script'] = $this->recaptcha->getScriptTag();
		$data['content'] = $this->helper->loadView('frontend/user/forgot', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function change_password()
	{
		$content['widget'] = $this->recaptcha->getWidget();
		$content['script'] = $this->recaptcha->getScriptTag();
		$data['content'] = $this->helper->loadView('frontend/user/change', $content, TRUE);
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function change_password_user()
	{
        $password = md5($this->input->post('password'));
        $new_password = md5($this->input->post('new_password'));
		$data['password'] = $new_password;
		$this->load->database();
		$this->load->model('user_model');
		$id = $this->session->userdata('id_user');
		$this->user_model->update($id, $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Password berhasil diubah.</div>');
        redirect(site_url('login'));
	}

	public function profile()
	{
		$data['content'] = $this->helper->loadView('frontend/user/profile');
        return $this->load->view('frontend/template', $data, TRUE);
	}

	public function change_profile()
	{
		$id = $this->session->userdata('id_user');
		$data['name_user'] = $this->input->post('nama');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['address'] = $this->input->post('alamat');
		$data['username'] = $this->input->post('username');
		$data['phone'] = $this->input->post('telepon');
		$data['panggilan'] = $this->input->post('panggilan');

		$this->load->database();
		$this->load->model('user_model');
		$this->user_model->update($id, $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Profil berhasil diubah.</div>');
        redirect(site_url('profile'));
	}

	public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username_user'); 
        $this->session->unset_userdata('name_user'); 
        $this->session->unset_userdata('logged_in_user'); 

        redirect(site_url('login'));
    }
}
