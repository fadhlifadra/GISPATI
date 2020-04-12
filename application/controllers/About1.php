<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About1 extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
        $data = array(
            'title' => 'About Us',
            'isi' => 'v_about1'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}
