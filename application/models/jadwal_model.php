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
						            'rules' => 'required|trim'),
						        array(
						            'field' => 'pesertaproyek', 
						            'label' => 'Peserta Proyek', 
						            'rules' => 'required|trim'));

	public function __construct()
	{
        // Call the Model constructor
        parent::__construct();
    }

	public function get_by_title($keyword = "", $order = 0)
	{
		if ($keyword == "" && $order == 0) return $this->get_all();

		$this->db->like('judul', $keyword);
		$this->db->order_by('tanggal_selesai', 'desc');
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
		$data['peserta_proyek'] = $this->input->post('pesertaproyek');
        
		$this->insert($data);
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
		$data['peserta_proyek'] = $this->input->post('pesertaproyek');

		$this->update($nomor, $data);
	}
}