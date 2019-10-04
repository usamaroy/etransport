<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TransportModel extends CI_Model {

    
    public function index()
    {
        $id=$this->session->userdata('user_id');
          $user_id = $id->id;
        $query=$this->db
				->select('*')
                ->from('transport_detail')
                ->where('user_id',$user_id)
				->get('');
				return $query->result_array();
    }

    public function store_vehicle_info()
    {
      
       $data = array(
           'user_id'        =>  $this->input->post('user_id'),
           'user_name'      =>  $this->input->post('user_name'),
           'reg_no'         =>  $this->input->post('reg_no'),
           'vehicle_name'   =>  $this->input->post('vehicle_name'),
           'vehicle_owner'  =>  $this->input->post('vehicle_owner'),
           'vehicle_color'  =>  $this->input->post('vehicle_color'),
           'vehicle_model'  =>  $this->input->post('vehicle_model'),
           'engine_no'      =>  $this->input->post('engine_no'),
           'chasis_no'      =>  $this->input->post('chasis_no'),
           'seat_capacity'  =>  $this->input->post('seat_capacity'),
           'vehicle_type'   =>  $this->input->post('vehicle_type'),
       );

      /*** t
                * CHeck email exist from @login ::TABLE 
                */
                $query  = $this->db
                ->where([
                        'chasis_no'     =>      $this->input->post('chasis_no'),
                        ])
                ->get('transport_detail');


        /*** 
         * 
         *  IF num_rows > 0 ::Than script generate
        */
        if($query->num_rows()>0)
        {
            echo 'false';
        }
         else{
                    $db=$this->db->insert("transport_detail",$data);
                        if($db)
                        {
                            echo 'success';
                        }
                        else
                        {
                            echo "fail";
                        }
                }



   
    }


    public function user_index()
    {
        $data=$this->db
        ->select('*')
        ->from('transport_detail')
        ->where('status','active')
        ->get('');
        return $data->result_array();
    }

}

?>