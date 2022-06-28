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
	
	public function seekers_list()
	{	
		if ($this->session->userdata('email') == '')
            redirect(base_url() . 'Client/login', 'refresh');
		
		$page_data['page_name'] = 'seekers_list';
		$this->load->view('index',$page_data);
		
	}
	
	public function Jobseeker()
	{	$page_data['page_name'] = 'jobseeker';
		$this->load->view('index',$page_data);
		/*$this->form_validation->set_rules('photo','upload-photo','required');
		$this->form_validation->set_rules('first_name','first-name','required');
		$this->form_validation->set_rules('last_name','last-name','required');
		$this->form_validation->set_rules('birth_date','birth-date','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('phone_number','phone-number','required');
		$this->form_validation->set_rules('district','district','required');
		$this->form_validation->set_rules('county','county','required');
		$this->form_validation->set_rules('institution','institution','required');
		$this->form_validation->set_rules('sector','sector','required');
		$this->form_validation->set_rules('starting_date','starting-date','required');
		$this->form_validation->set_rules('complete_date','complete-date','required');
		$this->form_validation->set_rules('degree','degree','required');
		$this->form_validation->set_rules('grade','grade','required');
		$this->form_validation->set_rules('company_name','company-name','required');
		$this->form_validation->set_rules('job_position','job-position','required');
		$this->form_validation->set_rules('location','location','required');
		$this->form_validation->set_rules('period_from','period-from','required');
		$this->form_validation->set_rules('period_to','period-to','required');*/
		//if($this->form_validation->run()){
			$yow=[
				'upload-photo'=>$this->input->post('photo'),
				'first-name'=>$this->input->post('first_name'),
				'last-name'=>$this->input->post('last_name'),
				'birth-date'=>$this->input->post('birth_date'),
				'gender'=>$this->input->post('gender'),
				'address'=>$this->input->post('address'),
				'district'=>$this->input->post('district'),
				'phone-number'=>$this->input->post('phone_number'),
				'county'=>$this->input->post('county'),
				'institution'=>$this->input->post('institution'),
				'sector'=>$this->input->post('sector'),
				'starting-date'=>$this->input->post('starting_date'),
				'complete-date'=>$this->input->post('complete_date'),
				'degree'=>$this->input->post('degree'),
				'grade'=>$this->input->post('grade'),
				'company-name'=>$this->input->post('company_name'),
				'job-position'=>$this->input->post('job_position'),
				'location'=>$this->input->post('location'),
				'period-from'=>$this->input->post('period_from'),
				'period-to'=>$this->input->post('period_to'),
	
			];
			$this->load->model('profile');
			$this->profile->insert_profile($yow);
            $data[]=$this->profile->fetch();
			//redirect(base_url('Client/seekers_details'));
		//}
		//else{
              
		//}
		
	}
	
	
	public function Seekers_details()
	{
		$page_data['page_name'] = 'seekers_details';
		$this->load->view('index',$page_data);
		
	}
	
	public function signup()
	{	
	
		
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email|is_unique[clients.clt_email]');		
		$this->form_validation->set_message('matches','{field} Don\'t Match');

		if ($this->form_validation->run() == false) 
		{
			$this->index();
			return;
		}
		
		
		$save = $this->crud_model->save_register();
		

		if ($save) 
		{
			
			$this->session->set_flashdata('success', 'Registration successfull');
			redirect(base_url() . 'Client/login', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Registration  Failed');
			redirect(base_url() . 'Client/login', 'refresh');
		}
		
		
		
	}
	

	public function login(){
		if (!$this->session->userdata('email') == '')
            redirect(base_url() . 'Client/login', 'refresh');

		$page_data['page_name'] = 'login';
		$this->load->view('index',$page_data);
	}

	public function processLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$login = $this->crud_model->process_login($email,$password);

		if ($login) 
		{
			$this->session->set_userdata('email',$login->email);
			
			$this->session->set_flashdata('success', 'Wellcome User ');
			redirect(base_url() . 'Client/seekers_list', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Wrong Username/email or Password');
			redirect(base_url() . 'Client/login', 'refresh');
			
		}
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

	
	public function edit($id){
		$this->load->model('profile_edit');
		$data['jobseeker']=$this->profile_edit->editt();
	$this->load->view('jobseeker',$data);
	}
}
