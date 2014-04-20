<?php 

class Karyawan_model extends MY_Model {

	protected $_table = 'Karyawan';

	protected $primary_key = 'NIP';

	protected $return_type = 'array';

    public $login_rules = array(
					        array(
					            'field' => 'NIP', 
					            'label' => 'NIP', 
					            'rules' => 'required|trim'),
					        array(
					            'field' => 'Password', 
					            'label' => 'Password', 
			            		'rules' => 'required|trim'));

    public $register_rules = array(
						        array(
						            'field' => 'password', 
						            'label' => 'Password', 
				            		'rules' => 'required|trim'),
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

	function __construct()
	{
        // Call the Model constructor
        parent::__construct();
    }

    function validate()
    {
    	$this -> db -> where('NIP', $this->input->post('NIP'));
		$this -> db -> where('password', $this->input->post('Password'));
		$query = $this -> db -> get('karyawan');

		if($query -> num_rows == 1){
			return true;
		}
    }

	function getAll()
	{
		$q = $this->db->get('karyawan');
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}


	function searchByName($keyword = "")
	{
		if ($keyword == "") return $this->getAll();

		$this->db->like('Nama', $keyword);
		$q = $this->db->get('karyawan');
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}		

	function addKaryawanData($nip)
	{
		$data = array();
		$data['nama'] = $_POST['nama'];
		$data['alamat'] = $_POST['alamat'];
		$data['tempatlahir'] = $_POST['tempatlahir'];
		$data['tanggallahir'] = $_POST['tanggallahir'];
		$data['divisi'] = $_POST['divisi'];
		$data['jabatan'] = $_POST['jabatan'];
		$data['tanggalditerima'] = $_POST['tanggalditerima'];
		$data['filefoto'] = $_POST['filefoto'];
		
		$this->db->query("INSERT INTO `karyawan` (`NIP`, `Nama`, `Alamat`, `Tempat Lahir`, `Tanggal Lahir`, `Divisi`, `Jabatan`, `Tanggal Diterima`, `Foto`)
			VALUES ('$nip', '$data[nama]','$data[alamat]','$data[tempatlahir]', '$data[tanggallahir]', '$data[divisi]', '$data[jabatan]', '$data[tanggalditerima]', '$data[filefoto]');");
	}
}