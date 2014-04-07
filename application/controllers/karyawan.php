<?php

	class Karyawan extends CI_Controller{

		function __construct() {
	        parent::__construct();
	        $this->load->model('Karyawan_model');
	    }

		function index() {
			cari();
		}

		function cari($keyword = "") {

			$data['title'] = "Cari Karyawan " . $keyword;
			$data['result'] = $this->Karyawan_model->searchByName($keyword);

			$this->load->view("karyawan/daftarkaryawan_view", $data);
		}

		function add($value = "") {
			$this->load->view('addemployee_view');
		}

		function create() {			
			$this->load->model('Karyawan_Model');
			$this->Karyawan_Model->addKaryawanData();
			$this->load->view('successfully_added');
		}
	}