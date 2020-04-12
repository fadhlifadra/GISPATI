<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('web');
	}
 
	function index(){
		$data = array(
            'title' => 'Info Adminstrasi Kota Pati',
			'isi' => 'v_admin',
			'data_gis' => $this->web->get_all_data()
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}