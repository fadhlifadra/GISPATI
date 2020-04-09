<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
        $data = array(
            'title' => 'Map View',
            'isi' => 'v_home'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}
