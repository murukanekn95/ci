<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct()
    {
    	parent::__construct();
    	private $userid;
    }


	public function index()
	{
		


		
		$this->load->view('index');
		  // $data=$this->user->getdata();
	}

	public function doLogin()
	{
		if($this->input->post('type')=='login')
		{
			$data=$this->user->checkLogin($_POST);

		}
		else
		{
			$data=$this->user->save_data($_POST);
		}
		
		echo json_encode($data);
	}

	
	}