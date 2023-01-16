<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function index() {	
		$data['bg'] = '';
		$this->load->view('template/header', $data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

	public function login(){
		$this->load->model('Auth_model');
		$this->Auth_model->login();
		redirect('/admin');
	}

}
