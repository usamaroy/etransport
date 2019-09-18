<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignupController extends CI_Controller{

    public function index()
    {
        $this->load->helper('form');
        
        $this->load->view('signup_view');
    }

    


    public function signup(){
        

        $this->load->model('loginmodel');
         $this->loginmodel->index();

    }

}