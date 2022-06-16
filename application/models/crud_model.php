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

	
}
