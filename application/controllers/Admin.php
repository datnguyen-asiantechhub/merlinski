
<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url"));
	}

	public function index()
	{
		$data['subview'] = 'pages/admin/homepage';
		$data['title']   = 'Admin System';
		$this->load->view('pages/admin/main', $data);
	}


	public function login()
	{

		$data['subview'] = 'pages/admin/loginadmin';
		$data['title']   = 'Admin System';
		$this->load->view('pages/admin/main', $data);
	}

}
  



?>


