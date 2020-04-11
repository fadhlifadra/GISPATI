<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
<<<<<<< HEAD
		$this->load->library('session');
		$this->load->model('web');
=======
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
>>>>>>> aa8cc06ade12b04d946f4533dea126e3edf97a71
	}
	public function index()
	{
        $data = array(
            'title' => 'Map View',
			'isi' => 'v_home',
			'data_gis' => $this->web->get_all_data()
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}
