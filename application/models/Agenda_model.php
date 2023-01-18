<?php 

class agenda_model extends CI_Model {

	function __construct(){
		$this->load->database();

	}
	public function getagenda(){

	
		$sql = "SELECT agenda.*, guru.nama_guru, guru.foto as afoto FROM agenda INNER JOIN guru ON agenda.id_author = guru.nip order by agenda.id_agenda desc ";
		
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}

	public function getagenda_author(){

	
		$sql = "SELECT * FROM agenda WHERE id_author = '".$this->session->userdata['data_user']['0']['nip']."'";
		
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function tambahagenda(){
		$judul = $this->input->post('Judul');
		$agenda = $this->input->post('agenda');
		$nama_gambar = $_FILES['foto']['name'];
		
		//s: upload file
		$this->load->helper('form');
		$config['upload_path']          = './assets/img/agenda';
		$config['allowed_types'] 		= 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload('foto');
		//e: upload file

		
		$author = $this->session->userdata['data_user']['0']['nip'];
		$sql = "INSERT INTO agenda (id_agenda,judul,id_author,isi_agenda,foto) VALUES ('','$judul', '$author','$agenda', '$nama_gambar')";
		$this->db->query($sql);
	}
	public function getidagenda(){

		$idagenda = $this->input->get('id_agenda');
		$sql = "SELECT * FROM agenda where id_agenda=$idagenda";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	public function editagenda(){


		$idagenda = $this->input->post('id_agenda');
		$judul = $this->input->post('Judul');
		$foto_lama = $this->input->post('foto_lama');
		$agenda = $this->input->post('agenda');
		$foto = $_FILES['foto']['name'];

		if($foto){
			//ada foto baru
			//s: upload file
			$this->load->helper('form');
			$config['upload_path']          = './assets/img/agenda';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);

			$this->upload->do_upload('foto');

			unlink('./assets/img/agenda/'. $foto_lama);
			//e: upload file

			$sql = "UPDATE agenda
			SET
				judul='$judul',
				isi_agenda='$agenda',
				foto = '$foto'
			WHERE
			id_agenda='$idagenda'";
			$this->db->query($sql);
		}else{
			//tidak ada foto baru
			$sql = "UPDATE agenda
			SET
				judul='$judul',
				isi_agenda='$agenda'
			WHERE
			id_agenda='$idagenda'";
			$this->db->query($sql);
		}


	}
	public function hapusagenda(){


		$idagenda = $this->input->get('id_agenda');
		$sql = "DELETE FROM agenda where id_agenda='$idagenda'";
		$this->db->query($sql);
	}
}
