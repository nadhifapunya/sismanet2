<?php 

class mahasiswa_model extends CI_Model {

	public function getdatamhs(){
		$this->load->database();
		$sql = "SELECT * FROM siswa";
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function deldatamhs(){
		$this->load->database();

		//get dari url
		$id_mhs = $this->input->get('id_mhs');
		$foto_lama = $this->input->get('foto_lama');

		unlink('image/'.$foto_lama);
		$sql = "DELETE FROM mahasiswa where id_mhs='$id_mhs'";
		$this->db->query($sql);

		return;
	}
}
