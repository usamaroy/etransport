
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	public function index()
	{
		if($login_data=$this->session->userdata('user_id'))
		{
			if($login_data)
			{
				$this->session->set_userdata('user_id',$login_data);
				// return redirect('admin/dashboard',$login_data);
			echo $role = $login_data->user_role;
					if($role==Null)
					{
						echo "dada";
						// return redirect('verify_user',$login_data);
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


	$this->load->view('login_view');
		
	}

	public function admin_login(){
		
	echo $email = $this->input->post('email');
	echo  $password = $this->input->post('password');
	}

	public function login()
	{


		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email:','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()==TRUE)
		{
			$this->load->model('loginmodel');
			$login_data =$this->loginmodel->login();

			if($login_data)
			{
				$this->session->set_userdata('user_id',$login_data);
				// return redirect('admin/dashboard',$login_data);
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

	function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('LoginController/login');
	}

	function verify_user(){
		$submit  =   $this->input->post('submit');
		$this->load->view('verify_user');
	}

	function test(){
	echo 	$submit  =   $this->input->post('submit');

	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($submit)) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
		

}


	// function __construct() {
 //        parent::__construct();
 //        if(!$this->session->userdata('user_id')){
 //            redirect('LoginController');
 //        }
 //    }
	
}
