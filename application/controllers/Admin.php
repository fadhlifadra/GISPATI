<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array(
            'title' => 'Map View',
            'isi' => 'v_admin'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}