<?php 
	class Karyawan_model extends CI_Model {

		function __construct() {
	        // Call the Model constructor
	        parent::__construct();
	    }

		function getAll() {
			$q = $this->db->get('karyawan');
			return ($q -> num_rows() > 0) ? $q->result() : NULL;
		}


		function searchByName($keyword = "") {
			if ($keyword == "") return $this->getAll();

			$this->db->where('nama', $keyword);
			$q = $this->db->get('karyawan');
			return ($q -> num_rows() > 0) ? $q->result() : NULL;
		}		

		function addKaryawanData() {
			// Tampung value yang ada di form
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$tel = $_POST['tempatlahir'];
			$tal = $_POST['tanggallahir'];
			$div = $_POST['divisi'];
			$jab = $_POST['jabatan'];
			$tad = $_POST['tanggalditerima'];
			$foto = $_POST['filefoto'];			

			// Masukkan data tersebut ke database menggunakan query
			$this->db->query("INSERT INTO `karyawan` (`Nama`, `Alamat`, `Tempat Lahir`, `Tanggal Lahir`, `Divisi`, `Jabatan`, `Tanggal Diterima`, `Foto`)
				VALUES ('$nama','$alamat','$tel', '$tal', '$div', '$jab', '$tad', '$foto');");
		}


	}
?>