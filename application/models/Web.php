<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Model {

    public function get_all_data()
    {
        $query = $this->db->order_by('remark','ASC')->get('gis');
        return $query->result();
    }

    public function get_olah_data()
    {
        $query = $this->db->order_by('id','DESC')->get('mall');
        return $query->result();
    }
}