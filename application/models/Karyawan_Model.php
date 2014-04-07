<?php 
	class karyawan_Model extends CI_Model {
		function getAll(){
			$q = $this->db->get('karyawan');
			if($q -> num_rows() > 0){
				foreach($q->result() as $row)
				{
					echo $row -> Nama;
				}
			}
		}

	}
?>