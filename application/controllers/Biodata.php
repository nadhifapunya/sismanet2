<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		if (!($this->session->userdata['data_user']['0']['nis'])) {
			redirect('/home');
		}
    }

	public function index()
	{
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('biodata');
	}
}
