<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Kelas controller Pengetahuan
 */
class Pengetahuan extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
        //$this->load->model('Karyawan_model');
    }

    public function _remap($method, $params = array())
    {
        if (method_exists(__CLASS__, $method)) {
            $this->$method($params);
        } else {
            redirect('kb/cari');
        }
    }

	public function index($param = '')
	{
		redirect('kb/cari');
	}

	public function cari($param = '')
	{
		# code...
	}

}