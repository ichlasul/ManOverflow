<?php

	class Login extends CI_Controller{  
		function index(){
			//$data['records'] = $this->load->model('Karyawan_Model');
			//$this->Karyawan_Model->getAll();
			$this->load->view('login_view');
		}
	}
?>