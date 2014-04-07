<?php

	class Karyawan extends CI_Controller{

		function index() {
			cari();
		}

		function cari($keyword = "") {

			$data['title'] = "Cari Karyawan " . $keyword;
			$this->load->view("karyawan/daftarkaryawan_view", $data);
		}

		function add($value = "") {
			$this->load->view('addemployee_view');
		}
	}