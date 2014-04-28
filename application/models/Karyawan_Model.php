<?php 

class Karyawan_model extends MY_Model {

	protected $_table = 'Karyawan';

	protected $primary_key = 'NIP';

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

	public function get_by_name($keyword = "")
	{
		if ($keyword == "") return $this->get_all();

		$this->db->like('Nama', $keyword);
		$q = $this->db->get('karyawan');
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}		

	public function add_karyawan($nip)
	{
		$data['Nama'] = $this->input->post('nama');
		$data['Alamat'] = $this->input->post('alamat');
		$data['TempatLahir'] = $this->input->post('tempatlahir');
		$data['TanggalLahir'] = $this->input->post('tanggallahir');
		$data['Divisi'] = $this->input->post('divisi');
		$data['Jabatan'] = $this->input->post('jabatan');
		$data['TanggalDiterima'] = $this->input->post('tanggalditerima');
		$data['Foto'] = $this->input->post('filefoto');

		$data['NIP'] = $nip;
		$this->insert($data);
		
		//$this->db->query("INSERT INTO `karyawan` (`NIP`, `Nama`, `Alamat`, `Tempat Lahir`, `Tanggal Lahir`, `Divisi`, `Jabatan`, `Tanggal Diterima`, `Foto`)
		//	VALUES ('$nip', '$data[nama]','$data[alamat]','$data[tempatlahir]', '$data[tanggallahir]', '$data[divisi]', '$data[jabatan]', '$data[tanggalditerima]', '$data[filefoto]');");
	}

	public function update_karyawan($nip)
	{
		$data['Nama'] = $this->input->post('nama');
		$data['Alamat'] = $this->input->post('alamat');
		$data['TempatLahir'] = $this->input->post('tempatlahir');
		$data['TanggalLahir'] = $this->input->post('tanggallahir');
		$data['Divisi'] = $this->input->post('divisi');
		$data['Jabatan'] = $this->input->post('jabatan');
		$data['TanggalDiterima'] = $this->input->post('tanggalditerima');
		$data['Foto'] = $this->input->post('filefoto');

		$this->update($nip, $data);
	}
}