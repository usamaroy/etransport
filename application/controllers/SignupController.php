<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignupController extends CI_Controller{

    public function index()
    {
        $this->load->helper('form');
        
        $this->load->view('signup_view');
    }


    public function signup(){
        echo $FullName = $this->input->post('name');
        echo  $Phone = $this->input->post('phone');
        echo  $CNIC = $this->input->post('cnic');
        echo $email = $this->input->post('email');
        echo  $password = $this->input->post('password');
        echo $City = $this->input->post('city');
        echo  $provinces = $this->input->post('provinces');
        echo  $Address = $this->input->post('address');
        echo  $Gender = $this->input->post('gender');


    }
}