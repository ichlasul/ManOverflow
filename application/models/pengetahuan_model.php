<?php 

class Pengetahuan_model extends MY_Model {

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

	public function get_by_keyword($keyword = "")
	{
		if ($keyword == "") return $this->get_all();

		$this->db->like('judul', $keyword);
		$this->db->or_like('konten', $keyword);
		$q = $this->db->get($this->_table);
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}
}