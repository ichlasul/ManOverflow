<?php

/**
* 
*/
class MY_Controller extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->ion_auth->logout();
		// Periksa sudah login atau belum, kecuali jika membuka halaman tertentu
		$no_redirect = array('login');
		if (!$this->ion_auth->logged_in() && !in_array(uri_string(), $no_redirect))  {
			redirect('login');
		}
	}

}
