<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FunctionController extends CI_Controller {


    private function redirect_user($role,$role_type,$data=null,$controller,$controller_function)
    {

       
					if($role==$role_type)
					{
						 return redirect($controller/$controller_function,$data);
					}
				
    }
}

?>