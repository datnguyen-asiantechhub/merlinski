
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
	public function customer_detail()
	{

		$data['subview'] = 'pages/admin/customer_detail';
		$data['title']   = 'All customers';
		$data['display_data'] = $this->data_model->customerDetail();
		$this->load->view('pages/admin/main', $data);
	}
	public function create_passcard_list()
	{

		$data['subview'] = 'pages/admin/create_passcard_list';
		$data['title']   = 'Create Pass Card';
		$data['display_data'] = $this->data_model->createdpasscardList();
		$this->load->view('pages/admin/main', $data);
	}
	public function lost_passcard_list()
	{

		$data['subview'] = 'pages/admin/lost_passcard_list';
		$data['title']   = 'Create Pass Card';
		$data['display_data'] = $this->data_model->lostdpasscardList();
		$this->load->view('pages/admin/main', $data);
	}
	/*Function for vouchers*/
	public function open_normal_vouchers_list()
	{

		$data['subview'] = 'pages/admin/open_normal_vouchers_list';
		$data['title']   = 'Open vouchers';
		$data['display_data'] = $this->data_model->open_normal_vouchers_list();
		$this->load->view('pages/admin/main', $data);
	}
	public function closed_vouchers_list()
	{

		$data['subview'] = 'pages/admin/closed_vouchers_list';
		$data['title']   = 'Close vouchers';
		$data['display_data'] = $this->data_model->closed_vouchers_list();
		$this->load->view('pages/admin/main', $data);
	}
	public function open_secondary_vouchers()
	{

		$data['subview'] = 'pages/admin/open_secondary_vouchers';
		$data['title']   = 'Open secondary sale vouchers';
		$data['display_data'] = $this->data_model->open_secondary_vouchers();
		$this->load->view('pages/admin/main', $data);
	}
	public function closed_secondary_vouchers()
	{

		$data['subview'] = 'pages/admin/closed_secondary_vouchers';
		$data['title']   = 'Close vouchers';
		$data['display_data'] = $this->data_model->closed_secondary_vouchers();
		$this->load->view('pages/admin/main', $data);
	}
	/*Function for vouchers*/
	public function inactive_pass_card()
	{

		$data['subview'] = 'pages/admin/inactive_pass_card';
		$data['title']   = 'Inactive Pass Cards';
		$data['display_data'] = $this->data_model->inactive_pass_card();
		$this->load->view('pages/admin/main', $data);
	}


}
  



?>


