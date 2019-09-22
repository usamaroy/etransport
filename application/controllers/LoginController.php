
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
// 		$this->load->helper('form');
// 		$newdata = array(
//         'username'  => 'johndoe',
//         'email'     => 'johndoe@some-site.com',
//         'logged_in' => TRUE
// );

// $this->session->set_userdata('login',23);

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
				return redirect('admin/dashboard',$login_data);
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
	
}
