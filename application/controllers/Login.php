<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		if(!empty($this->session->userdata['data_user'])){
			redirect('admin');
		}
		// $this->load->view('admin');
	}
	public function aksi_login(){
		$this->load->model('Auth_model');
		$login = $this->Auth_model->cek_login();

		if($login == 'Gagal'){
			redirect('/home');
		}else{
			$this->session->set_userdata('data_user', $login );
			redirect('/home');
		}
	}
	public function logout(){
		$this->session->unset_userdata('data_user');
		$this->session->sess_destroy();
		redirect('/home');
	}
}
