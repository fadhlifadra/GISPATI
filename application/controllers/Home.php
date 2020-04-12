<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('web');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
        $data = array(
            'title' => 'Info Adminstrasi Kota Pati',
			'isi' => 'v_home',
			'data_gis' => $this->web->get_all_data()
        );
        $this->load->view('template/v_wrapper_user', $data, FALSE);
	}
}
