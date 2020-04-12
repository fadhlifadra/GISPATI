<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
        $data = array(
            'title' => 'Route',
            'isi' => 'v_route'
        );
        $this->load->view('template/v_wrapper_user', $data, FALSE);
	}
}
