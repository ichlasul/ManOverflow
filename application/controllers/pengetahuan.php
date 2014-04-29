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
		# code...
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

}