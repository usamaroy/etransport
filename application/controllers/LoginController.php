
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('FunctionController.php');
class LoginController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 /**
	  * INDEX FUNCTION
	  *	This function have two different tasks
	  * 1)	=>	load (login_view)
	*	2)	=>	check if ::SESSION  SET than redirect acording user role

	  */
	public function index()
	{
		
		// CHECK ::SESSION AND THAN REDIRECT ACCORDING TO USER ROLE
		if($login_data=$this->session->userdata('user_id'))
		{
			if($login_data)
			{
				$this->session->set_userdata('user_id',$login_data);
				return redirect('LoginController/index',$login_data);
				
			echo $role = $login_data->user_role;
					if($role==Null)
					{
						echo "user";
						 //return redirect('verify_user',$login_data);
					}
					elseif($role=='transport')
					{
						 return redirect('transport/TransportController/transport_dashboard',$login_data);
					}
					elseif($role=='cargo')
					{
						return redirect('cargo/CargoController/cargo_dashboard',$login_data);
					}
					else
					{
						return redirect('user/UserController/user_dashboard',$login_data);
					}
					// $fun  = new FunctionController();
					// $fun->redirect_user($role,'transport',$login_data,'transport/TransportController','transport_dashboard');
			}
			else
			{
					
				$this->session->set_flashdata('login_failed','Email or Password not matched');
                        return redirect('LoginController/index');
			}
		}

		//Load View
	$this->load->view('login_view');
		
	}

	

	public function login()
	{

		//Load Library
		
	/*** Load form Validation*/	$this->load->library('form_validation');
	/*** set_rule for Email*/	$this->form_validation->set_rules('email','Email:','trim|required|valid_email'); 
	/*** set_rule for password*/	$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
	/*** set_rule for error delimeter*/	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


		if($this->form_validation->run()==TRUE)
		{
			$this->load->model('loginmodel');
			$login_data =$this->loginmodel->login();
		
//CHECK IF LOGIN FAILED THAN FLASH Message apears on login controller
			if($login_data)
			{
				$this->session->set_userdata('user_id',$login_data); /*** set seesion*/
				
			$role = $login_data->user_role;
					if($role==='null')
					{
						
						$this->load->view('verify_user');
					
					}
					elseif($role=='transport')
					{
						 return redirect('transport/TransportController/transport_dashboard',$login_data);
					}
					elseif($role=='cargo')
					{
						return redirect('cargo/CargoController/cargo_dashboard',$login_data);
					}
					else
					{
						return redirect('user/UserController/user_dashboard',$login_data);
					}
			}
			else
			{
				$this->session->set_flashdata('login_failed','Email or Password not matched');
                        return redirect('LoginController/index');
			}


		}
		else
		{
			$this->load->view('login_view');
		}

	}

	
/*** 
 * 
 * Verify users after ::Register
 * 
*/
	function verify_user(){
		$submit  =   $this->input->post('submit');
			if($submit)
			{
				
				$this->load->model('loginmodel');
				$response = $this->loginmodel->verify_user();

				/*** Check Response  @true || @false than respond*/
				 if($response==true){
				  $this->session->set_flashdata('response_success','Now! were set');
				
                     // return redirect('LoginController/index');
				}
		}
		else
		{
			/*** laod View*/
			$this->load->view('verify_user');
		}
		
	}



	

		// LOGOUT or Destroy::SESSION
	function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('LoginController/login');
	}

	// function __construct() {
    //     parent::__construct();
    //     if(!$this->session->userdata('user_id')){
    //         redirect('LoginController');
		
	// 	}
    // }
	
}
