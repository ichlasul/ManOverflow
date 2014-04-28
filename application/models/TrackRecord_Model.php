<?php 

class TrackRecord_model extends MY_Model {

	protected $_table = 'track_record';

	protected $primary_key = 'id';

	public function __construct()
	{
        // Call the Model constructor
        parent::__construct();
    }

	public function get_by_name($keyword = "")
	{
		if ($keyword == "") return $this->get_all();

		$this->db->like('Nama', $keyword);
		$q = $this->db->get('track_record');
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}		

	public function add_trackrecord($nip)
	{
		$data['Nama'] = $this->input->post('nama');

		$data['ID'] = $id;
		$this->insert($data);
		
		//$this->db->query("INSERT INTO `karyawan` (`NIP`, `Nama`, `Alamat`, `Tempat Lahir`, `Tanggal Lahir`, `Divisi`, `Jabatan`, `Tanggal Diterima`, `Foto`)
		//	VALUES ('$nip', '$data[nama]','$data[alamat]','$data[tempatlahir]', '$data[tanggallahir]', '$data[divisi]', '$data[jabatan]', '$data[tanggalditerima]', '$data[filefoto]');");
	}

	public function update_trackrecord($id)
	{
		$data['Nama'] = $this->input->post('nama');
		$this->update($nip, $data);
	}
}
