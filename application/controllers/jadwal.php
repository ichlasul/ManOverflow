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
			redirect('jadwal/tambah');
		} else
		{
			redirect('jadwal/cari');
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
    		$this->data['resultkaryawan'] = $this->Karyawan_model->get_by_name('');
    		// if (count($this->data['resultkaryawan']) > 0)
    		// {    			
    		// 	$this->data['listkaryawan'] = '[';
    		// 	foreach ($this->data['resultkaryawan'] as $row) {
    		// 		$this->data['listkaryawan'] .= '\''.$row->NIP . ' ' . $row->Nama . '\',';
    		// 	}    	    			
    		// 	$this->data['listkaryawan'] .= ']';
    		// }    		    		
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
			$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;				
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
        $this->data['resultkaryawan'] = $this->Karyawan_model->get_by_name('');        
        $this->data['title'] = 'Edit Jadwal';
        $this->data['nomor'] = $nomor;
        $this->data['result'] = $this->Jadwal_model->get($param);
        $this->data['edit_mode'] = TRUE;
        $this->load->view('jadwal/tambahjadwal_view', $this->data);
	}

	public function cari($param = '')
	{
		$param = rawurldecode($param);
		if ($param == '')		
			$this->data['title'] = 'Cari Jadwal ' . $param;
		else
			$this->data['title'] = 'Daftar jadwal dengan judul "' . $param . '"';
		$this->data['result'] = $this->Jadwal_model->get_by_title($param);		
		$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;		
		$this->data['listofjadwal'] = $this->Jadwal_model->get_by_title('');
		if (count($this->data['listofjadwal']) > 0)
    		{    			
    			$this->data['listjadwal'] = '[';
    			foreach ($this->data['listofjadwal'] as $row) {
    				$this->data['listjadwal'] .= '\'' . $row->judul . '\',';
    			}    	    			
    			$this->data['listjadwal'] .= ']';
    		}
    	$this->Jadwal_model->update_current_proyek();
		$this->load->view("jadwal/daftarjadwal_view", $this->data);
	}

	public function search($param = '')
	{
		redirect('jadwal/cari/'. $this->input->post('keyword'));
	}

	public function hapus($param = '')
	{
		if ($this->ion_auth->is_admin() === TRUE)
		{
			$this->data['results'] = $this->Jadwal_model->get($param);
			$this->data['listofjadwal'] = $this->Jadwal_model->get_by_title('');
		if (count($this->data['listofjadwal']) > 0)
    		{    			
    			$this->data['listjadwal'] = '[';
    			foreach ($this->data['listofjadwal'] as $row) {
    				$this->data['listjadwal'] .= '\'' . $row->judul . '\',';
    			}    	    			
    			$this->data['listjadwal'] .= ']';
    		}
			if (count($this->data['results']) > 0)
			{
				$this->Jadwal_model->delete($param);
				$this->data['info'] = 'Data jadwal proyek ' . $this->data['results']->judul . ' berhasil dihapus';
			}			
			$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;
			$this->data['title'] = 'Cari Jadwal';			
			$this->data['result'] = $this->Jadwal_model->get_by_title();
			$this->Jadwal_model->update_current_proyek();
			$this->load->view("jadwal/daftarjadwal_view", $this->data);			

		}
		else
		{
			redirect('jadwal/cari');
		}		
	}

	public function lists($param = '')
	{
		if ($param == '')
		{
			$param = $this->ion_auth->user()->result()[0]->username;
		}
		else if ($this->ion_auth->is_admin() === FALSE && $param != $this->ion_auth->user()->result()[0]->username)
		{
			redirect('jadwal/cari');
		}
		$this->Jadwal_model->update_current_proyek();
		$q = $this->Karyawan_model->get_by_nip($param);
		if (count($q) == 0) {
			redirect('jadwal/cari');;
		}
		$this->data['title'] = 'List Jadwal ' . $param . ' ' . $q[0]->Nama;		
		$this->data['list'] = $q[0]->ListCurrentProyek;
		$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;				
		$this->load->view("jadwal/listjadwal_view", $this->data);
	}
}