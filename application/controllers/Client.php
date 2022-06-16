<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->database();
	}
	
	public function index()
	{	$page_data['page_name'] = 'login';
		
		$this->load->view('login',$page_data);
	}
	
	public function Employer()
	{	$page_data['page_name'] = 'seekers_list';
		$page_data['freeodds'] = $this->crud_model->get_freeodds();
		$this->load->view('index',$page_data);
	}
	
	public function Jobseeker()
	{	$page_data['page_name'] = 'jobseeker';
		$this->load->view('index',$page_data);
	}
	
	
	public function login()
	{
		
		
	}
	
	public function register()
	{
		
		
	}
	
	
	public function logout()
	{
				/*	$this->session->set_userdata(
					array(
						'username'	=> NULL,
						
					));
				*/
				
				session_destroy();
				$this->session->set_flashdata('success',"Logged out Successfull");

			$this->index();
			return;
	}

	
	
}
