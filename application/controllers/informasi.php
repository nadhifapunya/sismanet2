<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('berita_model');
		$this->load->model('agenda_model');
	}
	public function index() {
		$data['title'] = 'Informasi';
		$this->load->model('Auth_model');
		$data['bg'] = 'bg-smanet';
		$data['berita'] = $this->berita_model->getberita();
		$data['agenda'] = $this->agenda_model->getagenda();
		$this->load->view('template/header', $data);
		$this->load->view('informasi', $data);
	}
	public function berita(){
		$data['title'] = 'Berita';
		$data['bg'] = 'bg-smanet';
		// $data['id'] = $id;
		$data['berita'] = $this->berita_model->getidberita();
		$this->load->view('template/header', $data);
		$this->load->view('informasi/id_berita', $data);

	}
	public function agenda(){
		$data['title'] = 'Agendax';
		$data['bg'] = 'bg-smanet';
		// $data['id'] = $id;
		$data['agenda'] = $this->agenda_model->getidagenda();
		$this->load->view('template/header', $data);
		$this->load->view('informasi/id_agenda', $data);

	}
}
