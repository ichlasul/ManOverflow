<?php

/**
* 
*/
class MY_Controller extends CI_Controller {
	
	public $data = array();

	public function __construct() {
		parent::__construct();

		$this->data['controller'] = 'MY';

		$no_redirect = array('karyawan/login');
		$admin_only = array('karyawan/tambah', 'karyawan/edit', 'karyawan/hapus', 'karyawan/cari');

		// Periksa sudah login atau belum, kecuali jika membuka halaman tertentu
		if ($this->ion_auth->logged_in() === FALSE && !in_array(uri_string(), $no_redirect))
		{
			redirect('karyawan/login');
		}
		//halaman tertentu hanya bisa diakses admin
		else if ($this->ion_auth->is_admin() === FALSE && in_array(uri_string(), $admin_only))
		{
			show_404();
		}
	}

}
