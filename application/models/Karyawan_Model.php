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

			$this->db->where('Nama', $keyword);
			$q = $this->db->get('karyawan');
			return ($q -> num_rows() > 0) ? $q->result() : NULL;
		}

	}
?>