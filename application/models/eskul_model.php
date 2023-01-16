<?php 

class eskul_model extends CI_Model {

	function __construct(){
		$this->load->database();

	}
	public function geteskul(){

	
		$sql = "SELECT * FROM eskul";
		
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}

	public function getideskul($ideskul){

		//$ideskul = $this->input->get('id_eskul');
		$sql = "SELECT * FROM eskul where id_eskul=$ideskul";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	public function editeskul(){

		$ideskul = $this->input->post('id_eskul');
		$nama_eskul = $this->input->post('nama_eskul');
		$foto_lama = $this->input->post('foto_lama');
		$tentang_eskul = $this->input->post('tentang_eskul');
		$foto = $_FILES['foto']['name'];

		if($foto){
			//ada foto baru
			//s: upload file
			$this->load->helper('form');
			$config['upload_path']          = './assets/img/eskul';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);

			$this->upload->do_upload('foto');

			unlink('./assets/img/eskul/'. $foto_lama);
			//e: upload file

			$sql = "UPDATE eskul
			SET
				nama_eskul='$nama_eskul',
				tentang_eskul='$tentang_eskul',
				foto = '$foto'
			WHERE
			id_eskul='$ideskul'";
			$this->db->query($sql);
		}else{
			//tidak ada foto baru
			$sql = "UPDATE eskul
			SET
				nama_eskul='$nama_eskul',
				tentang_eskul='$tentang_eskul'
			WHERE
			id_eskul='$ideskul'";
			$this->db->query($sql);
		}


}
}
