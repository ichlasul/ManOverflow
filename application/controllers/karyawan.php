<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends MY_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('Karyawan_model');
    }

	function index() {
		if ($this->ion_auth->is_admin() === TRUE) {
			$this->cari();
		} else {
			$this->profil();
		}
	}

	function cari($keyword = "") {

		$data['title'] = "Cari Karyawan " . $keyword;
		$data['result'] = $this->Karyawan_model->searchByName($keyword);

		$this->load->view("karyawan/daftarkaryawan_view", $data);
	}

	function search($value = "") {
		redirect('/karyawan/cari/'. $this->input->post('keyword'), 'location');
	}

	function profil($value='')
	{
		# code...
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
        $this->ion_auth->logout();
        redirect('karyawan/login');    
	}

	function login() {
		// redirect if already logged in
        if ($this->ion_auth->logged_in()) {
            redirect('karyawan');
        }
        
        // Validate the form
        $this->form_validation->set_rules($this->Karyawan_model->validation);
        if ($this->form_validation->run() == true) {
            
            // Try to log in
            if ($this->ion_auth->login($this->input->post('NIP'), $this->input->post('Password')) === TRUE) {
                redirect('karyawan');
            }
            else {
                $this->data['error'] = 'Kombinasi NIP atau Password salah';
            }
        }
        
        // Load view
        $this->load->view('login_view', $this->data);
	}

	function validate_credentials(){
        $this->load->model('Karyawan_Model');
        $query = $this->Karyawan_Model->validate();

        if($query)
        {
            $data = array(
                'NIP' => $this->input->post('NIP'),
                'is_logged_in' => true
            );

            //$this->session->set_userdata($data);
            $this->ion_auth->login($this->input->post('NIP'),
                                   $this->input->post('password'),
                                   TRUE);
            redirect('home');
        }
        else{
            redirect('login');
        }
    }
}