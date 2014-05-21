<?php 

class TrackRecord_model extends MY_Model {

	protected $_table = 'trackrecord';

	protected $primary_key = 'id';

	public $tambahtrackrecord_rules = array(
											array(
												'field' => 'nama',
												'label' => 'Nama Track Record',
												'rules' => 'required'),
											array(
						            			'field' => 'namakaryawan', 
						            			'label' => 'Nama Karyawan', 
						            			'rules' => 'required'));

	public function __construct()
	{
        // Call the Model constructor
        parent::__construct();
    }

	public function get_by_name($keyword = "")
	{
		if ($keyword == "") return $this->get_all();

		$this->db->like('nama', $keyword);
		$q = $this->db->get($this->_table);
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}	

	public function get_by_id($keyword = "", $order = 0)
	{
		if ($keyword == "" && $order == 0) return $this->get_all();

		$this->db->like('id', $keyword);
		// $this->db->order_by('tanggal_selesai', 'desc');
		$q = $this->db->get($this->_table);
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}	

	public function add_trackrecord($id)
	{
		$data['id'] = $id;
		$data['nama'] = $this->input->post('nama');

		$namaKaryawan = "";
		foreach ($this->input->post('namakaryawan') as $listNamaKaryawan) {
			$namaKaryawan .= $listNamaKaryawan . ", ";

			$spltdNamaKaryawan = explode(" ", $listNamaKaryawan);
			$q = $this->Karyawan_model->get_by_nip($spltdNamaKaryawan[0]);

			$this->Karyawan_model->db->where('NIP', $spltdNamaKaryawan[0]);
			$newdata['jumlahtrackrecord'] = $q->jumlahtrackrecord + 1;
			$this->Karyawan_model->db->update('Karyawan', $newdata);
		}

		$data['namakaryawan'] = $namaKaryawan;
		$this->insert($data);
		$this->update_list_trackrecord();
		
		//$this->db->query("INSERT INTO `karyawan` (`NIP`, `Nama`, `Alamat`, `Tempat Lahir`, `Tanggal Lahir`, `Divisi`, `Jabatan`, `Tanggal Diterima`, `Foto`)
		//	VALUES ('$nip', '$data[nama]','$data[alamat]','$data[tempatlahir]', '$data[tanggallahir]', '$data[divisi]', '$data[jabatan]', '$data[tanggalditerima]', '$data[filefoto]');");
	}

	public function update_list_trackrecord(){
		$listTrackRecord = $this->get_by_name('');
		$listKaryawan = $this->Karyawan_model->get_by_nip('');

		foreach ($listKaryawan as $karyawan) {		
			$q = $this->Karyawan_model->get_by_nip($karyawan->NIP);
			$this->Karyawan_model->db->where('NIP', $karyawan->NIP);
			$newdata['jumlahtrackrecord'] = 0;
			$newdata['listTrackRecord'] = '';
			$this->Karyawan_model->db->update('Karyawan', $newdata);
		}

		foreach ($listTrackRecord as $TrackRecord) {
			$listNamaPemilik = explode(", ", $TrackRecord->NamaKaryawan);
				foreach ($listNamaPemilik as $listNamaPemilik) {
					$spltdNamaPemilik = explode(" ", $listNamaPemilik);
					$q = $this->Karyawan_model->get_by_nip($spltdNamaPemilik[0]);
					$this->Karyawan_model->db->where('NIP', $spltdNamaPemilik[0]);								
					$newdata['jumlahtrackrecord'] = $q[0]->jumlahtrackrecord + 1;
					$newdata['ListTrackRecord'] = $q[0]->ListTrackRecord . $TrackRecord->id . ', ';
					$this->Karyawan_model->db->update('Karyawan', $newdata);
				}
		}
	}

	public function update_trackrecord($id)
	{
		$data['id']=$id;
		$data['nama'] = $this->input->post('nama');
		$namaKaryawan = "";
		foreach ($this->input->post('namakaryawan') as $listNamaKaryawan) {			
			$namaKaryawan .= $listNamaKaryawan . ", ";
		}

		$data['namakaryawan'] = $namaKaryawan;
		$this->update($id, $data);

		$this->update_list_trackrecord();
	}
}
