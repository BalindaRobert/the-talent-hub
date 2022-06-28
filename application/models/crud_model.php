<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class crud_model extends CI_Model 
{
	private $user_id;
	private $today;

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		$this->today = date('Y-m-d h:i:s');
	}
	// --------------------------------------------------------------------

	
	public function process_login($email,$password)
	{
		$res = $this->db->query('SELECT * FROM login where email  = "'.$email.'" and password = "'.$password.'"');

		return $res->num_rows() > 0 ? $res->row() : 0;
	}
	

	public function save_register()
	{
 
		$data=[
			'name' =>$this->input->post('name'),
            'email' =>$this->input->post('email'),
			'password' =>$this->input->post('password'),
		];				
			
		$res = $this->db->insert("login", $data);

		return $res ? 1 : 0;
	}

}
?>