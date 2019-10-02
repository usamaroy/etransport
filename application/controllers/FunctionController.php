<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FunctionController {


    private function redirect_user($role,$role_type,$data=null,$controller,$controller_function)
    {

       
					if($role==$role_type)
					{
						 return redirect($controller/$controller_function,$data);
					}
				
	}
	
	 /***
	  *  
	  * Get ::IP Address from client
	  *
	 */
	public function get_client_ip() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
		   $ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	
	
}

?>