<?php 

class Pengetahuan_model extends MY_Model {

	protected $_table = 'Pengetahuan';

	protected $primary_key = 'id';

    public $input_rules = array(
						        array(
						            'field' => 'judul', 
						            'label' => 'Judul', 
						            'rules' => 'required'),
						        array(
						            'field' => 'konten', 
						            'label' => 'Konten', 
						            'rules' => 'required'));

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

	public function add($nip, $judul, $konten)
	{
		$data['judul'] = $judul;
		$data['konten'] = $konten;
		$data['poster_nip'] = $nip;
		$data['waktu_dibuat'] = '';
		$data['waktu_modifikasi'] = '';

		return $this->insert($data);
	}
}