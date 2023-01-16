<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tassmanet extends CI_Controller
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
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('tassmanet');
	}
	public function pilih()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->getdatasiswa();
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('tassmanet2', $data);
	}
	public function lapor()
	{
		$this->load->model('siswa_model');
		$pelanggaran = $this->siswa_model->insertLaporan();
		$dta = $this->siswa_model->getnohp();
		$hp1 = $dta['0']['nohp_ortu'];
		$nama = $dta['0']['nama_siswa'];
		$password = 'lbwyBzfgzUIvXZFShJuikaWvLJhIVq36';
		$hp = $this->load->encrypt($hp1, $password);
		$pln = $this->load->encrypt($pelanggaran, $password);
		// var_dump($hp);
		// die;
		header('Location: http://localhost:3000/Sismanet/api?tujuan='.urlencode($hp).'&nama='.urldecode($nama).'&pesan='.urlencode($pln));
		// header('Location: http://localhost:3000/Sismanet/api?tujuan='.urlencode($nohp['0']['nohp_ortu']).'&pesan='.urlencode($pelanggaran));
	}
}
