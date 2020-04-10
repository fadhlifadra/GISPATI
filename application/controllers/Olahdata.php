<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olahdata extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
        $data = array(
            'title' => 'Olah Data',
            'isi' => 'v_olahdata'
        );
        $this->load->view('template/v_wrapper1', $data, FALSE);
	}
}
