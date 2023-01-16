<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

		if(empty($this->session->userdata['data_user'])){
			redirect('/home');
		}
	}
	public function index()
	{
		$data['bg1'] = 'active';
		$data['bg2'] = '';
		$data['bg3'] = '';
		$data['bg4'] = '';
		$data['bg5'] = '';
		$this->load->model('berita_model');
		$this->load->model('siswa_model');
		$data['berita'] = $this->berita_model->hitungberita();
		$data['pelanggaran'] = $this->siswa_model->hitungpelanggaran();
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/admin',$data);
		$this->load->view('admin/footer');
	}
	public function agenda()
	{
		$data['bg2'] = 'active';
		$data['bg1'] = '';
		$data['bg3'] = '';
		$data['bg4'] = '';
		$data['bg5'] = '';
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getagenda();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/agenda');	
		$this->load->view('admin/footer');
	}
	public function tambah_agenda()
	{
		$data['bg2'] = 'active';
		$data['bg1'] = '';
		$data['bg3'] = '';
		$data['bg4'] = '';
		$data['bg5'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/agenda_tambah');	
		$this->load->view('admin/footer');
	}
	public function post_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->tambahagenda();
		redirect('admin/agenda');
	}
	public function edit_agenda()
	{
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getidagenda();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/agenda_edit');
		$this->load->view('admin/footer');
	}
	public function ngedit_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->editagenda();
		redirect('admin/agenda');
		
	}
	public function hapus_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->hapusagenda();
		redirect('admin/agenda');
	}
	public function berita()
	{
		$data['bg3'] = 'active';
		$data['bg2'] = '';
		$data['bg4'] = '';
		$data['bg1'] = '';
		$data['bg5'] = '';
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getberita();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/berita');	
		$this->load->view('admin/footer');
		
	}
	public function tambah_berita()
	{
		$data['bg3'] = 'active';
		$data['bg2'] = '';
		$data['bg4'] = '';
		$data['bg1'] = '';
		$data['bg5'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/berita_tambah');	
		$this->load->view('admin/footer');
	}
	public function post_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->tambahberita();
		redirect('admin/berita');
	}
	public function edit_berita()
	{
		$data['bg3'] = 'active';
		$data['bg2'] = '';
		$data['bg4'] = '';
		$data['bg1'] = '';
		$data['bg5'] = '';
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getidberita();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/berita_edit', $data);
		$this->load->view('admin/footer');
		
	}
	public function ngedit_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->editberita();
		redirect('admin/berita');
		
	}
	public function hapus_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->hapusberita();
		redirect('admin/berita');
	}

	public function eskul()
	{
		$data['bg4'] = 'active';
		$data['bg2'] = '';
		$data['bg3'] = '';
		$data['bg1'] = '';
		$data['bg5'] = '';
		$this->load->model('eskul_model');
		$data['eskul'] = $this->eskul_model->geteskul();
		$this->load->view('admin/navbar', $data);
		$this->load->view('Ekstrakulikuler/eskul', $data);	
		$this->load->view('admin/footer');
	}

	public function tambah_eskul()
	{
		$data['bg4'] = 'active';
		$data['bg1'] = '';
		$data['bg3'] = '';
		$data['bg2'] = '';
		$data['bg5'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('Ekstrakulikuler/eskul_tambah');	
		$this->load->view('admin/footer');
	}

	public function post_eskul()
	{
		$this->load->model('eskul_model');
		$this->eskul_model->tambaheskul();
		redirect('admin/eskul');
	}

	public function edit_eskul($ideskul)
	{
		$data['bg4'] = 'active';
		$data['bg1'] = '';
		$data['bg3'] = '';
		$data['bg2'] = '';
		$data['bg5'] = '';
		$this->load->model('eskul_model');
		$data['eskul'] = $this->eskul_model->getideskul($ideskul);
		$this->load->view('admin/navbar', $data);
		$this->load->view('Ekstrakulikuler/eskul_edit', $data);
		$this->load->view('admin/footer');
	}
	public function ngedit_eskul()
	{
		$this->load->model('eskul_model');
		$this->eskul_model->editeskul();
		redirect('admin/eskul');
		
	}
	public function hapus_eskul()
	{
		$this->load->model('eskul_model');
		$this->eskul_model->hapuseskul();
		redirect('admin/eskul');
	}

	public function pelanggaran()
	{
		$this->load->model('siswa_model');
		$data['pelanggaran'] = $this->siswa_model->getpelanggaran();
		$data['bg5'] = 'active';
		$data['bg3'] = '';
		$data['bg2'] = '';
		$data['bg1'] = '';
		$data['bg4'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pelanggaran', $data);	
		$this->load->view('admin/footer');
	}



}
