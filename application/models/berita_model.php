<?php 

class berita_model extends CI_Model {

	function __construct(){
		$this->load->database();

	}
	public function getberita(){

	
		$sql = "SELECT * FROM berita order by id_berita desc";
		
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function tambahberita(){
		$judul = $this->input->post('Judul');
		$berita = $this->input->post('berita');
		$nama_gambar = $_FILES['foto']['name'];
		
		//s: upload file
		$this->load->helper('form');
		$config['upload_path']          = './assets/img/berita';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload('foto');
		//e: upload file

		// $author = $_POST['id_author'];
		$sql = "INSERT INTO berita (id_berita,judul,isi_berita,foto) VALUES ('','$judul', '$berita', '$nama_gambar')";
		$this->db->query($sql);
	}
	public function getidberita(){

		$idberita = $this->input->get('id_berita');
		$sql = "SELECT * FROM berita where id_berita=$idberita";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	public function editberita(){


		$idberita = $this->input->post('id_berita');
		$judul = $this->input->post('Judul');
		$foto_lama = $this->input->post('foto_lama');
		$berita = $this->input->post('berita');
		$foto = $_FILES['foto']['name'];

		if($foto){
			//ada foto baru
			//s: upload file
			$this->load->helper('form');
			$config['upload_path']          = './assets/img/berita';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);

			$this->upload->do_upload('foto');

			unlink('./assets/img/berita/'. $foto_lama);
			//e: upload file

			$sql = "UPDATE berita
			SET
				judul='$judul',
				isi_berita='$berita',
				foto = '$foto'
			WHERE
			id_berita='$idberita'";
			$this->db->query($sql);
		}else{
			//tidak ada foto baru
			$sql = "UPDATE berita
			SET
				judul='$judul',
				isi_berita='$berita'
			WHERE
			id_berita='$idberita'";
			$this->db->query($sql);
		}


	}
	public function hapusberita(){
		$idberita = $this->input->get('id_berita');
		$sql = "DELETE FROM berita where id_berita='$idberita'";
		$this->db->query($sql);
	}
	public function hitungberita(){
		$sql = "SELECT Count(id_berita) as jumlah from berita";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
}
