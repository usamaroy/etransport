<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexModel extends CI_Model {

function index(){
    $data=$this->db
				->select('*')
                ->from('transport_detail')
                ->where('status','active')
				->get('');
                return $data->result_array();
}
 
                
}