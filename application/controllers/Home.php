<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('web');
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
