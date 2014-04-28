<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index($param = '')
	{
		
	}

	public function not_found($param = '')
	{
		$data['error'] = TRUE;
		$this->load->view('404_view', $data);
	}
}