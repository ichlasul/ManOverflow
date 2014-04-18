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

			$this->ion_auth->register($_POST['nama'], $_POST['password'], $_POST['nama']);

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

		function login() {
			// redirect if already logged in
	        if ($this->ion_auth->logged_in()) {
	            redirect('home');
	        }
	        
	        // Validate the form
	        $this->form_validation->set_rules($this->user_model->validation);
	        if ($this->form_validation->run() == true) {
	            
	            // Try to log in
	            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password')) == TRUE) {
	                redirect('questions/listing');
	            }
	            else {
	                $this->data['error'] = 'We could not log you in';
	            }
	        }
	        
	        // Set subview & Load layout
	        $this->load_view('users/login');
		}
	}