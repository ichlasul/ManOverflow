<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrackRecord extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('TrackRecord_model');
        $this->load->model('Karyawan_model');

        $this->data['controller'] = 'trackrecord';
    }

     public function _remap($method, $params = array())
	{
	    if (method_exists($this, $method))
	    {
	        return call_user_func_array(array($this, $method), $params);
	    } else {
	    	redirect('trackrecord');
	    }
	}

	public function index($param = '')
	{
		if ($this->ion_auth->is_admin() === TRUE)
		{
			redirect('trackrecord/cari');
		} else
		{
			redirect('trackrecord/cari');
		}
	}

	public function tambah($param = '')
	{
    	//validasi form
    	if ($this->ion_auth->is_admin() === TRUE){
        	$this->form_validation->set_rules($this->TrackRecord_model->tambahtrackrecord_rules);
        	//coba register
        	$id = $this->TrackRecord_model->count_all();
    		$id += 1;
    		$id = $id . '';
        	if ($this->form_validation->run() === TRUE)
        	{         	
        		$this->TrackRecord_model->add_trackrecord($id);
        		redirect('trackrecord/detail/'.$id);
        	}        

        	$this->data['id'] = $id;
    		$this->data['resultkaryawan'] = $this->Karyawan_model->get_by_name('');

    		$this->load->view('trackrecord/tambahtrackrecord_view', $this->data);
    		//$this->load->view('pengetahuan/tambahpengetahuan_view', $this->data);
    	}
        else
        {
            redirect('trackrecord/cari');
        }
    
	}

	public function detail($param = '')
	{		
		if ($param == '')
		{
			redirect('trackrecord/cari');
		}		
		
		$this->data['result'] = $this->TrackRecord_model->get($param);
		if (count($this->data['result']) > 0)
		{	
			$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;				
			$this->data['title'] = 'Informasi TrackRecord ' . $this->data['result']->nama;
			$this->load->view('trackrecord/detailtrackrecord_view', $this->data);
		}
	}

	public function edit($param = '')
	{
		if (($param == '') || ($this->ion_auth->is_admin() === FALSE))
		{
			redirect('trackrecord/cari');
		}

		$id = $param;

    	//validasi form
        $this->form_validation->set_rules($this->TrackRecord_model->tambahtrackrecord_rules);
        if ($this->form_validation->run() === TRUE)
        {         	
        	$this->TrackRecord_model->update_trackrecord($id);
        	redirect('trackrecord/detail/'.$id);
        }        
        
        // Load view
        $this->data['resultkaryawan'] = $this->Karyawan_model->get_by_name('');  
        $this->data['title'] = 'Edit TrackRecord';
        $this->data['id'] = $id;
        $this->data['result'] = $this->TrackRecord_model->get($param);
        $this->data['edit_mode'] = TRUE;
        $this->load->view('trackrecord/tambahtrackrecord_view', $this->data);
	}

	public function hapus ($param = '')
	{
		if ($this->ion_auth->is_admin() === TRUE)
		{
			$this->data['results'] = $this->TrackRecord_model->get($param);
			$this->data['listoftrackrecord'] = $this->TrackRecord_model->get_by_name('');
		if (count($this->data['listoftrackrecord']) > 0)
    		{    			
    			$this->data['listtrackrecord'] = '[';
    			foreach ($this->data['listoftrackrecord'] as $row) {
    				$this->data['listtrackrecord'] .= '\'' . $row->nama . '\',';
    			}    	    			
    			$this->data['listtrackrecord'] .= ']';
    		}
			if (count($this->data['results']) > 0)
			{
				$this->TrackRecord_model->delete($param);
				$this->data['info'] = 'Data TrackRecord ' . $this->data['results']->nama . ' berhasil dihapus';
			}			
			$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;
			$this->data['title'] = 'Cari TrackRecord';			
			$this->data['result'] = $this->TrackRecord_model->get_by_name();
			$this->TrackRecord_model->update_list_trackrecord();
			$this->load->view("trackrecord/daftartrackrecord_view", $this->data);			

		}
		else
		{
			redirect('trackrecord/cari');
		}		
	}

	public function cari($param = '')
	{
		$param = rawurldecode($param);
		if ($param == '')		
			$this->data['title'] = 'Cari TrackRecord ' . $param;
		else
			$this->data['title'] = 'Daftar TrackRecord dengan nama "' . $param . '"';
		$this->data['result'] = $this->TrackRecord_model->get_by_name($param);		
		$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;		
		$this->data['listoftrackrecord'] = $this->TrackRecord_model->get_by_name('');
		if (count($this->data['listoftrackrecord']) > 0)
    		{    			
    			$this->data['listtrackrecord'] = '[';
    			foreach ($this->data['listoftrackrecord'] as $row) {
    				$this->data['listtrackrecord'] .= '\'' . $row->nama . '\',';
    			}    	    			
    			$this->data['listtrackrecord'] .= ']';
    		}
    	$this->TrackRecord_model->update_list_trackrecord();
		$this->load->view("trackrecord/daftartrackrecord_view", $this->data);
	}

	public function search($param = '')
	{
		redirect('/trackrecord/cari/'. $this->input->post('keyword'));
	}

	public function lists($param = '')
	{
		if ($param == '')
		{
			$param = $this->ion_auth->user()->result()[0]->username;
		}
		else if ($this->ion_auth->is_admin() === FALSE && $param != $this->ion_auth->user()->result()[0]->username)
		{
			redirect('karyawan/profil');
		}
		$this->TrackRecord_model->update_list_trackrecord();
		$q = $this->Karyawan_model->get_by_nip($param);
		if (count($q) == 0) {
			redirect('karyawan/profil');;
		}
		$this->data['title'] = 'My Track Record';		
		$this->data['list'] = $q[0]->jumlahtrackrecord;
		$this->data['mode'] = $this->ion_auth->is_admin() ? 1 : 2;				
		$this->load->view("trackrecord/listtrackrecord_view", $this->data);
	}

}