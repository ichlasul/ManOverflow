<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Kelas controller Pengetahuan
 */
class Pengetahuan extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('Pengetahuan_model');

        $this->data['controller'] = 'pengetahuan';
    }

    public function _remap($method, $params = array())
	{
	    if (method_exists($this, $method))
	    {
	        return call_user_func_array(array($this, $method), $params);
	    } else {
	    	redirect('pengetahuan/cari');
	    }
	}

	public function tambah($param = '')
	{
    	//validasi form
        $this->form_validation->set_rules($this->Pengetahuan_model->input_rules);
        if ($this->form_validation->run() === TRUE)
        {
        	$nip = $this->ion_auth->user()->row()->username;
            $result = $this->Pengetahuan_model->add($nip, $this->input->post('judul'), $this->input->post('konten'));
        	redirect('pengetahuan/lihat/'.$result);
        }
        
        // Load view
        $this->data['title'] = 'Tambah Pengetahuan';
        $this->load->view('pengetahuan/tambahpengetahuan_view', $this->data);
	}

	public function hapus ($param = '')
	{
		$this->Pengetahuan_model->delete($param);
		$this->data['info'] = 'Pengetahuan berhasil dihapus';
		$this->cari();
	}

	public function cari($param = '')
	{

		$this->data['title'] = 'Cari Pengetahuan ' . $param;
		$this->data['result'] = $this->Pengetahuan_model->get_by_keyword($param);
		$this->load->view("pengetahuan/daftarpengetahuan_view", $this->data);
	}

	public function search($param = '')
	{
		redirect('/pengetahuan/cari/'. $this->input->post('keyword'));
	}

	public function lihat($param = '')
	{
		$this->data['result'] = $this->Pengetahuan_model->get($param);
		if (count($this->data['result']) > 0)
		{	
			$this->data['title'] = $this->data['result']->judul;
			$this->load->view('pengetahuan/detailpengetahuan_view', $this->data);
		} else {
			redirect('pengetahuan/cari');
		}
	}

	public function edit($param = '')
	{
		$id = $param;

    	//validasi form
        $this->form_validation->set_rules($this->Pengetahuan_model->input_rules);
        if ($this->form_validation->run() === TRUE)
        {         	
        	$this->Pengetahuan_model->update_pengetahuan($id);
        	redirect('pengetahuan/lihat/'.$id);
        }        
        
        // Load view
        $this->data['resultkaryawan'] = $this->Karyawan_model->get_by_name('');  
        $this->data['title'] = 'Edit Pengetahuan';
        $this->data['id'] = $id;
        $this->data['result'] = $this->Pengetahuan_model->get($param);
        $this->data['edit_mode'] = TRUE;
        $this->load->view('pengetahuan/tambahpengetahuan_view', $this->data);
	}

	

}