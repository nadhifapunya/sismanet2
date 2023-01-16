<?php

class siswa_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getdatasiswa()
	{

		$kelas = $this->input->post('kelas');
		$tingkatan = $this->input->post('tingkatan');
		$date = getdate();
		// $datenow = $date['year'] . '-' . $date['mon'] . '-' . $date['mday'];
		$datenow = 2023 . '-' . 5 . '-' . $date['mday'];
		echo $datenow;
		$akt = date('Y', strtotime('-'.$tingkatan.' year', strtotime($datenow)) );
		// $akt = date('Y', strtotime('-'.$tingkatan.' year-06 month', strtotime($datenow)) );
		echo $akt;

		

		$sql = "SELECT * FROM siswa where kelas='$kelas' AND angkatan=$akt";
		echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function getnohp()
	{

		$nis = $this->input->post('nis');
		$sql = "SELECT nama_siswa, nohp_ortu FROM siswa where nis='$nis'";
		// echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function insertLaporan()
	{

		$nis = $this->input->post('nis');
		$pelanggaran = $this->input->post('pelanggaran');
		$input1 = $this->input->post('input1');

		if ($pelanggaran == 1) {
			$sql = "INSERT INTO pelanggaran (id_pelanggaran, nis, nip_guru, JenisPelanggaran, date) VALUES (NULL, '$nis', '123', '$input1', now() );";
			$this->db->query($sql);
			return $input1;
		} else {
			$sql = "INSERT INTO pelanggaran (id_pelanggaran, nis, nip_guru, JenisPelanggaran, date) VALUES (NULL, '$nis', '123', '$pelanggaran', now());";
			$this->db->query($sql);
			return $pelanggaran;
		}
	}
	public function hitungpelanggaran(){
		$sql = "SELECT Count(id_pelanggaran) as jumlah from pelanggaran";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}

	public function getpelanggaran(){
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
}
