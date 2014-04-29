<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->model('Karyawan_model');

        $this->data['controller'] = 'jadwal';
    }

    public function _remap($method, $params = array())
	{
	    if (method_exists($this, $method))
	    {
	        return call_user_func_array(array($this, $method), $params);
	    } else {
	    	redirect('jadwal');
	    }
	}

	public function index($param = '')
	{
		if ($this->ion_auth->is_admin() === TRUE)
		{
			redirect('karyawan/tambah');
		} else
		{
			redirect('karyawan/tambah');
		}
	}

	public function tambah($param = '')
	{
        if ($this->ion_auth->is_admin() === TRUE)
        {        	   
        	$this->form_validation->set_rules($this->Jadwal_model->tambahjadwal_rules);
        	$nomor = 1000 + $this->Jadwal_model->count_all();
    		$nomor = $nomor . '';
        	if ($this->form_validation->run() === TRUE)
        	{         	
        		$this->Jadwal_model->add_jadwal($nomor);
        		redirect('jadwal/detail/'.$nomor);
        	}        	
    		$this->data['nomor'] = $nomor;
	        $this->load->view('jadwal/tambahjadwal_view', $this->data);
        }
        else
        {
	        redirect('jadwal/cari');
    	}
	}

	public function detail($param = '')
	{		
		if ($param == '')
		{
			redirect('jadwal/cari');
		}		
		
		$this->data['result'] = $this->Jadwal_model->get($param);
		if (count($this->data['result']) > 0)
		{	
			$this->data['title'] = 'Informasi Jadwal Proyek ' . $this->data['result']->judul;
			$this->load->view('jadwal/detailjadwal_view', $this->data);
		}
	}

	public function edit($param = '')
	{
		if (($param == '') || ($this->ion_auth->is_admin() === FALSE))
		{
			redirect('jadwal/cari');
		}

		$nomor = $param;
    	
        $this->form_validation->set_rules($this->Jadwal_model->tambahjadwal_rules);
        if ($this->form_validation->run() === TRUE)
        { 			
        	$this->Jadwal_model->update_jadwal($nomor);
        	redirect('jadwal/detail/'.$nomor);
        }
                
        $this->data['title'] = 'Edit Jadwal';
        $this->data['nomor'] = $nomor;
        $this->data['result'] = $this->Jadwal_model->get($param);
        $this->data['edit_mode'] = TRUE;
        $this->load->view('jadwal/tambahjadwal_view', $this->data);
	}

	public function cari($param = '')
	{
		if ($param == '')		
			$this->data['title'] = 'Cari Jadwal ' . $param;
		else
			$this->data['title'] = 'Daftar jadwal dengan judul "' . $param . '"';
		$this->data['result'] = $this->Jadwal_model->get_by_title($param);
		$this->load->view("jadwal/daftarjadwal_view", $this->data);
	}

	public function search($param = '')
	{
		redirect('jadwal/cari/'. $this->input->post('keyword'));
	}

	public function hapus ($param = '')
	{
		if ($this->form_validation->run() === TRUE)
		{
			$this->data['result'] = $this->Jadwal_model->get($param);
			$this->Jadwal_model->delete($param);
			$this->data['info'] = 'Data jadwal proyek ' . $this->data['result']->judul . ' berhasil dihapus';
			redirect('jadwal/cari');
		}
		else
		{
			redirect('jadwal/cari');
		}
	}
}