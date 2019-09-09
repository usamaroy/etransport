<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignupController extends CI_Controller{

    public function index()
    {
        $this->load->helper('form');
        
        $this->load->view('signup_view');
    }


    public function signup(){
        echo $FullName = $this->input->post('FullName');
        echo  $Phone = $this->input->post('Phone');
        echo  $CNIC = $this->input->post('CNIC');
        echo $email = $this->input->post('email');
        echo  $password = $this->input->post('password');
        echo $City = $this->input->post('City');
        echo  $provinces = $this->input->post('provinces');
        echo  $Address = $this->input->post('Address');
        echo  $Gender = $this->input->post('Gender');


    }
}