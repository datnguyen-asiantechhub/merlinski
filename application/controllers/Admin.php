
<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url"));
		$this->load->model('data_model');
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
	public function customers_list()
	{

		$data['subview'] = 'pages/admin/list_customer';
		$data['title']   = 'All customers';
		$data['display_data'] = $this->data_model->customersList();
		$this->load->view('pages/admin/main', $data);
	}

}
  



?>


