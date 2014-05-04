<?php 

class Jadwal_model extends MY_Model {

	protected $_table = 'jadwal';

	protected $primary_key = 'nomor';	

    public $tambahjadwal_rules = array(
						        array(
						            'field' => 'judulproyek', 
						            'label' => 'Judul Proyek', 
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'deskripsi', 
						            'label' => 'Deskripsi', 
						            'rules' => 'required'),
						        array(
						            'field' => 'tanggalmulai', 
						            'label' => 'Tanggal Mulai', 
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'tanggalselesai', 
						            'label' => 'Tanggal Selesai', 
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'pemimpinproyek', 
						            'label' => 'Pemimpin Proyek', 
						            'rules' => 'required'),
						        array(
						            'field' => 'pesertaproyek', 
						            'label' => 'Peserta Proyek', 
						            'rules' => 'required'));

	public function __construct()
	{
        // Call the Model constructor
        parent::__construct();
    }

	public function get_by_title($keyword = "", $order = 0)
	{
		if ($keyword == "" && $order == 0) return $this->get_all();

		$this->db->like('judul', $keyword);
		// $this->db->order_by('tanggal_selesai', 'desc');
		$q = $this->db->get($this->_table);
		return ($q -> num_rows() > 0) ? $q->result() : NULL;
	}		

	public function add_jadwal($nomor)
	{
		$data['nomor'] = $nomor;
		$data['judul'] = $this->input->post('judulproyek');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['tanggal_mulai'] = $this->input->post('tanggalmulai');
		$data['tanggal_selesai'] = $this->input->post('tanggalselesai');
		$data['prioritas'] = $this->input->post('prioritas');		
		$data['pemimpin_proyek'] = $this->input->post('pemimpinproyek');

		$spltdPemimpinProyek = explode(" ", $this->input->post('pemimpinproyek'));		
		$q = $this->Karyawan_model->get_by_nip($spltdPemimpinProyek[0]);

		$this->Karyawan_model->db->where('NIP', $spltdPemimpinProyek[0]);
		$newdata['CurrentProyek'] = $q->CurrentProyek + 1;
		$this->Karyawan_model->db->update('Karyawan', $newdata);

		$pesertaProyek = "";
		foreach ($this->input->post('pesertaproyek') as $listPesertaProyek) {
			$pesertaProyek .= $listPesertaProyek . ", ";

			$spltdPesertaProyek = explode(" ", $listPesertaProyek);
			$q = $this->Karyawan_model->get_by_nip($spltdPesertaProyek[0]);

			$this->Karyawan_model->db->where('NIP', $spltdPesertaProyek[0]);
			$newdata['CurrentProyek'] = $q->CurrentProyek + 1;
			$this->Karyawan_model->db->update('Karyawan', $newdata);
		}

		$data['peserta_proyek'] = $pesertaProyek;
        
		$this->insert($data);

		$this->update_current_proyek();
	}

	public function update_jadwal($nomor)
	{
		$data['nomor'] = $nomor;
		$data['judul'] = $this->input->post('judulproyek');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['tanggal_mulai'] = $this->input->post('tanggalmulai');
		$data['tanggal_selesai'] = $this->input->post('tanggalselesai');
		$data['prioritas'] = $this->input->post('prioritas');
		$data['pemimpin_proyek'] = $this->input->post('pemimpinproyek');

		// $spltdPemimpinProyek = explode(" ", $this->input->post('pemimpinproyek'));		
		// $q = $this->Karyawan_model->get_by_nip($spltdPemimpinProyek[0]);

		// $this->Karyawan_model->db->where('NIP', $spltdPemimpinProyek[0]);
		// $newdata['CurrentProyek'] = $q->CurrentProyek + 1;
		// $this->Karyawan_model->db->update('Karyawan', $newdata);

		$pesertaProyek = "";
		foreach ($this->input->post('pesertaproyek') as $listPesertaProyek) {			
			$pesertaProyek .= $listPesertaProyek . ", ";

			// $spltdPesertaProyek = explode(" ", $listPesertaProyek);
			// $q = $this->Karyawan_model->get_by_nip($spltdPesertaProyek[0]);

			// $this->Karyawan_model->db->where('NIP', $spltdPesertaProyek[0]);
			// $newdata['CurrentProyek'] = $q->CurrentProyek + 1;
			// $this->Karyawan_model->db->update('Karyawan', $newdata);
		}

		$data['peserta_proyek'] = $pesertaProyek;

		$this->update($nomor, $data);

		$this->update_current_proyek();
	}	

	public function update_current_proyek()
	{
		$listJadwal = $this->get_by_title('');

		foreach ($listJadwal as $jadwal) {
			$spltdPemimpinProyek = explode(" ", $jadwal->pemimpin_proyek);		
			$q = $this->Karyawan_model->get_by_nip($spltdPemimpinProyek[0]);
			$this->Karyawan_model->db->where('NIP', $spltdPemimpinProyek[0]);
			$newdata['CurrentProyek'] = 0;
			$this->Karyawan_model->db->update('Karyawan', $newdata);
		}

		foreach ($listJadwal as $jadwal) {
			$spltdPemimpinProyek = explode(" ", $jadwal->pemimpin_proyek);		
			$q = $this->Karyawan_model->get_by_nip($spltdPemimpinProyek[0]);
			$this->Karyawan_model->db->where('NIP', $spltdPemimpinProyek[0]);
			// foreach ($q as $row) {
				$newdata['CurrentProyek'] = $q[0]->CurrentProyek + 1;
				$this->Karyawan_model->db->update('Karyawan', $newdata);	
			// }			
		}

		foreach ($listJadwal as $jadwal) {
			$listPesertaRaw = explode(", ", $jadwal->peserta_proyek);
			foreach ($listPesertaRaw as $listPeserta) {				
				$spltdPesertaProyek = explode(" ", $listPeserta);			
				//echo $spltdPesertaProyek[1] . '<br>';
				$q = $this->Karyawan_model->get_by_nip($spltdPesertaProyek[0]);
				$this->Karyawan_model->db->where('NIP', $spltdPesertaProyek[0]);				
				$newdata['CurrentProyek'] = 0;
				$this->Karyawan_model->db->update('Karyawan', $newdata);
			}		
		}

		foreach ($listJadwal as $jadwal) {
			$listPesertaRaw = explode(", ", $jadwal->peserta_proyek);
			foreach ($listPesertaRaw as $listPeserta) {
				$spltdPesertaProyek = explode(" ", $listPeserta);
				$q = $this->Karyawan_model->get_by_nip($spltdPesertaProyek[0]);
				$this->Karyawan_model->db->where('NIP', $spltdPesertaProyek[0]);				
				// foreach ($q as $row) {
					$newdata['CurrentProyek'] = $q[0]->CurrentProyek + 1;
					$this->Karyawan_model->db->update('Karyawan', $newdata);
				// }								
			}		
		}
	}
}