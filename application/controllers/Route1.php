<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route1 extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
        $data = array(
            'title' => 'Route',
            'isi' => 'v_route1'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}
