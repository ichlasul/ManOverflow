<?php

	class Karyawan extends MY_Controller{

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

		function search($value = "") {
			redirect('/karyawan/cari/'. $this->input->post('keyword'), 'location');
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

		function logout()
    	{
        //$this->session->unset_userdata('logged_in');
        //session_destroy();
        redirect('login');    
    	}

		function failLogin(){
			$this->load->view('failelogin');
		}
	}