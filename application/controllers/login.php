<?php

	class Login extends MY_Controller{  
		function index(){
			//$data['records'] = $this->load->model('Karyawan_Model');
			//$this->Karyawan_Model->getAll();
			$this->load->view('login_view');
		}

		function validate_credentials(){
            $this->load->model('Karyawan_Model');
            $query = $this->Karyawan_Model->validate();

            if($query)
            {
                $data = array(
                    'NIP' => $this->input->post('NIP'),
                    'is_logged_in' => true
                );

                //$this->session->set_userdata($data);
                redirect('home');
            }
            else{
                redirect('login');
            }
        }

        function logout() {
            $this->ion_auth->logout();
        }

	}
?>