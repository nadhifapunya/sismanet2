<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pelanggaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		if (!($this->session->userdata['data_user']['0']['nip'])) {
			redirect('/home');
		}
	}
	public function index()
	{
		{
			$data['bg'] = 'bg-smanet';
			$this->load->model('siswa_model');
			$data['pelanggaran'] = $this->siswa_model->getpelanggaran();
			$this->load->view('template/header', $data);
			$this->load->view('informasi/pelanggaran', $data);	
			$this->load->view('admin/footer');
			
		}
	}
}
