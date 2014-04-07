<?php 
	class Karyawan_mpdel extends CI_Model {

		function __construct() {
	        // Call the Model constructor
	        parent::__construct();
	    }

		function getAll(){
			$q = $this->db->get('karyawan');
			return ($q -> num_rows() > 0) ? $q->result() : NULL;
		}


		function searchByName($keyword = "") {
			if ($keyword == "") return getAll();

			$this->db->where('nama', $keyword);
			$q = $this->db->get('karyawan');
			return ($q -> num_rows() > 0) ? $q->result() : NULL;
		}

	}
?>