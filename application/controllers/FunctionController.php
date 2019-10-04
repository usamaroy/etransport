<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FunctionController {


    private function redirect_dash($user_role)
    {

       
		if($user_role=='transport'){
			echo base_url('tdash');
		}
		elseif($user_role=='cargo'){
			echo base_url('cdash');
		}
		elseif($user_role=='user'){
			echo base_url('udash');
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


	//trim data

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	  }
	
	 
	
}

?>