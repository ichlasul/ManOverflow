<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller{
    function __construct(){
        parent::__construct();
        //$this->is_logged_in();
    }
    
    public function index(){
        $this->load->view("home_view");
    }   

    function logout()
    {
        //$this->session->unset_userdata('logged_in');
        //session_destroy();
        redirect('login');    
    }

    /*function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            die();
        }
    }*/

}
?>
