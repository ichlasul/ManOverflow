<?php 

class Karyawan_model extends MY_Model {

	protected $_table = 'Pengetahuan';

	protected $primary_key = 'id';

	// TODO
    public $add_rules = array(
						        array(
						            'field' => 'nama', 
						            'label' => 'Nama', 
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'alamat', 
						            'label' => 'Alamat', 
						            'rules' => 'required'),
						        array(
						            'field' => 'tempatlahir', 
						            'label' => 'Tempat Lahir', 
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'tanggallahir', 
						            'label' => 'Tanggal Lahir', 
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'tanggalditerima', 
						            'label' => 'Tanggal Diterima', 
						            'rules' => 'required|trim'));

	public function __construct()
	{
        // Call the Model constructor
        parent::__construct();
    }
}