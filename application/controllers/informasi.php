<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index() {
		$data['bg'] = 'bg-smanet';
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getberita();
	    $this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getagenda();
		$this->load->view('template/header', $data);
		$this->load->view('informasi', $data);
	}
	public function berita(){
		$data['bg'] = 'bg-smanet';
		// $data['id'] = $id;
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getidberita();
		$this->load->view('template/header', $data);
		$this->load->view('informasi/id_berita', $data);

	}
	public function agenda(){
		$data['bg'] = 'bg-smanet';
		// $data['id'] = $id;
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getidagenda();
		$this->load->view('template/header', $data);
		$this->load->view('informasi/id_agenda', $data);

	}
}
