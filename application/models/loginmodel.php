<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {


        function index(){

            $data = array(

                'fullname'  =>  $this->input->post('name'),
         'contact' => $this->input->post('contact'),
          'cnic' => $this->input->post('cnic'),
         'email' => $this->input->post('email'),
         'password' => $this->input->post('password'),
        'city' => $this->input->post('city'),
         'province' => $this->input->post('provinces'),
         'address' => $this->input->post('address'),
        'gender' => $this->input->post('gender'),
    );
         

           $db=$this->db->insert("login",$data);
           if($db){
               echo "Insertsucces";
           }else{
               echo "fail";
           }
        }
       

    }



        ?>