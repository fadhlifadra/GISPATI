<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olahdata extends CI_Controller {
	public function __construct() 
	{
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
            'title' => 'Olah Data',
            'isi' => 'v_olahdata',
            'data_olah' => $this->web->get_olah_data()
        );
        $this->load->view('template/v_wrapper1', $data, FALSE);
	}
	// public function datakab()
	// {
    //     $data = array(
    //         'title' => 'Olah Data',
    //         'isi' => 'v_olahdata'
    //     );
    //     $this->load->view('template/v_wrapper1', $data, FALSE);
	// }
	// public function datamall()
	// {
    //     $data = array(
    //         'title' => 'Olah Data',
    //         'isi' => 'v_olahdata'
    //     );
    //     $this->load->view('template/v_wrapper1', $data, FALSE);
	// }
}
