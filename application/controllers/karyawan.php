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
			$this->Karyawan_Model->addKaryawanData();

			$data = array(
				'data' => array(
					'nama' => $_POST['nama'],
					'alamat' => $_POST['alamat'],
					'tempatlahir' => $_POST['tempatlahir'],
					'tanggallahir' => $_POST['tanggallahir'],
					'divisi' => $_POST['divisi'],
					'jabatan' => $_POST['jabatan'],
					'tanggalditerima' => $_POST['tanggalditerima'],
					'filefoto' => $_POST['filefoto']
				)
			);

			$this->load->view('successfully_added', $data);
		}

		function failLogin(){
			$this->load->view('failelogin');
		}
	}