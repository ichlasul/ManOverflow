<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('Karyawan_model');
    }

	public function index($param = '')
	{
		if ($this->ion_auth->is_admin() === TRUE)
		{
			redirect('karyawan/cari');
		} else
		{
			redirect('karyawan/profil');
		}
	}

	public function login($param = '')
	{
		// redirect if already logged in
        if ($this->ion_auth->logged_in()) {
            redirect('karyawan');
        }
        
        // Validate the form
        $this->form_validation->set_rules($this->Karyawan_model->login_rules);
        if ($this->form_validation->run() === TRUE)
        {
            
            // Try to log in
            if ($this->ion_auth->login($this->input->post('NIP'), $this->input->post('Password')) === TRUE)
            {
                redirect('karyawan');
            }
            else
            {
                $this->data['error'] = 'Kombinasi NIP atau Password salah';
            }
        }
        
        // Load view
        $this->data['title'] = 'Log In';
        $this->load->view('login_view', $this->data);
	}

	public function logout($param = '')
	{
        $this->ion_auth->logout();
        redirect('karyawan/login');   
	}

	public function tambah($param = '')
	{
		//hitung nip
		$nip = 13511000 + $this->Karyawan_model->count_all();
    	$nip = $nip . '';

    	//validasi form
        $this->form_validation->set_rules($this->Karyawan_model->register_rules);
        if ($this->form_validation->run() === TRUE)
        {
        	//coba register
        	$password = $this->input->post('password');
        	$email = $nip . '@vsilicon.com';
        	$groups = $this->input->post('admin') ? array('1') : array();
            $result = $this->ion_auth->register($nip, $password, $email, array(), $groups);
 
            if ($result === FALSE)
            {
            	$this->data['error'] = 'Registrasi Gagal';
            }
            else
            {
            	$this->Karyawan_model->addKaryawanData($nip);
            	redirect('karyawan/profil/'.$result);
            }
        }
        
        // Load view
        $this->data['title'] = 'Tambah Karyawan';
        $this->data['nip'] = $nip;
        $this->load->view('karyawan/tambahkaryawan_view', $this->data);
	}

	public function cari($param = '')
	{
		$this->data['title'] = 'Cari Karyawan ' . $param;
		$this->data['result'] = $this->Karyawan_model->searchByName($param);
		$this->load->view("karyawan/daftarkaryawan_view", $this->data);
	}

	public function search($param = '')
	{
		redirect('/karyawan/cari/'. $this->input->post('keyword'));
	}

	public function profil($param = '')
	{
		//jika tanpa parameter berarti membuka profilnya sendiri
		//jika memakai parameter maka hanya boleh admin
		//selain admin redirect
		if ($param == '')
		{
			$param = $this->ion_auth->user()->result()[0]->username;
		}
		else if ($this->ion_auth->is_admin() === FALSE)
		{
			redirect('karyawan/profil');
		}

		//tampilkan
		$this->data['result'] = $this->Karyawan_Model->get($param);
		if (count($this->data['result']) > 0)
		{	
			$this->data['title'] = 'Profil ' . $this->data['result']['Nama'];
			$this->load->view('karyawan/detailkaryawan_view', $this->data);
		}
	}

	public function validate_credentials($param = '')
	{
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