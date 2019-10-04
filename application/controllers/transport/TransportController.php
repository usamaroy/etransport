<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require('FunctionController.php');
class TransportController extends CI_Controller {

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
		
		$this->load->view('transport/index_transport');
		
	}

	 function transport_dashboard()
	{
		$this->load->model('TransportModel');
		$data =  $this->TransportModel->index();
		
		$this->load->view('transport/transport_dashboard',['data' => $data]);
	}



	public function store_vehicle_info(){
		//$this->function;
		// $fun = new FunctionController;
		// $ip =  $fun->get_client_ip();
		$this->load->model('TransportModel');
		$response = $this->TransportModel->store_vehicle_info();
	}
}