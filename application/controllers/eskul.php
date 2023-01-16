<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eskul extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('eskul', $data);

	}
	public function id($id = ''){
		$data['bg'] = 'bg-smanet';
		// $data['id'] = $id;
		$this->load->model('eskul_model');
		$data['eskul'] = $this->eskul_model->getideskul($id);
		$this->load->view('template/header', $data);
		$this->load->view('ekstrakulikuler/id_eskul', $data);

	}
	
}
