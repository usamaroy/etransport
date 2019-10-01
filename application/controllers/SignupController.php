<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('FunctionController.php');
class SignupController extends CI_Controller{

    public function index()
    {
        
        $this->load->helper('form');
        
        $this->load->view('signup_view');
    }

    


    public function signup(){
        $fun = new FunctionController;
    $ip =  $fun->get_client_ip();

        $this->load->model('loginmodel');
         $this->loginmodel->index($ip);

    }

}