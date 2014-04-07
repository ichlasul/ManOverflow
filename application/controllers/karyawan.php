<?php

	class Karyawan extends CI_Controller{

		function index(){
			cari();
		}

		function cari($keyword = "") {
			$this->load->view("karyawan/daftarkaryawan_view");
		}
	}