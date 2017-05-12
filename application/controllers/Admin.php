
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


  public function create_new_voucher(){
      $data['subview'] = 'pages/admin/create_new_voucher';
      $data['title'] = 'Admin System';
      $this->load->view('pages/admin/main',$data);
  }
  public function content(){
      $data['subview'] = 'pages/admin/main_content';
      $data['title'] = 'Admin System';
      $this->load->view('pages/admin/main',$data);
  }

	public function login()
	{

		$data['subview'] = 'pages/admin/loginadmin';
		$data['title']   = 'Admin System';
		$this->load->view('pages/admin/main', $data);
	}

	public function customer()
	{
		$data['subview'] = 'pages/admin/customer';
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
	public function access_report()
	{

		$data['subview'] = 'pages/admin/access_report';
		$data['title']   = 'Acess report';
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
	public function create_voucher()
	{

		$data['subview'] = 'pages/admin/create_voucher';
		$data['title']   = 'Create new voucher';

		$this->load->view('pages/admin/main', $data);
	}
	public function create_new_product()
	{

		$data['subview'] = 'pages/admin/create_new_product';
		$data['title']   = 'Create new product';

		$this->load->view('pages/admin/main', $data);
	}
	public function closed_secondary_vouchers()
	{

		$data['subview'] = 'pages/admin/closed_secondary_vouchers';
		$data['title']   = 'Close secondary sale vouchers';
		$data['display_data'] = $this->data_model->closed_secondary_vouchers();
		$this->load->view('pages/admin/main', $data);
	}
	/*Function for vouchers*/
	public function pass_card_generated(){
		$data['subview'] = 'pages/admin/pass_card_generated';
		$data['title']   = 'Pass Card generated succesfully';
		$data['number']   = '324324532432';
		$data['customer']   = 'Robert Kenny';		
		$this->load->view('pages/admin/main', $data);
	}
	public function create_passcard_list()
	{

		$data['subview'] = 'pages/admin/create_passcard_list';
		$data['title']   = 'Create Pass Card';
		$data['display_data'] = $this->data_model->createdpasscardList();
		$this->load->view('pages/admin/main', $data);
	}
	public function lost_passcard()
	{

		$data['subview'] = 'pages/admin/lost_passcard';
		$data['title']   = 'Lost Pass Cards';
		$data['display_data'] = $this->data_model->lostdpasscardList();
		$this->load->view('pages/admin/main', $data);
	}
	public function inactive_pass_card()
	{

		$data['subview'] = 'pages/admin/inactive_pass_card';
		$data['title']   = 'Inactive Pass Cards';
		$data['display_data'] = $this->data_model->inactive_pass_card();
		$this->load->view('pages/admin/main', $data);
	}
	public function view_all_pass_card()
	{

		$data['subview'] = 'pages/admin/view_all_pass_card';
		$data['title']   = 'Active Pass Cards';
		$data['display_data'] = $this->data_model->active_pass_card();
		$this->load->view('pages/admin/main', $data);
	}
	/*Function for orders*/
	public function list_orders_today()
	{

		$data['subview'] = 'pages/admin/list_orders_today';
		$data['title']   = 'Orders today';
		$data['display_data'] = $this->data_model->list_orders_today();
		$this->load->view('pages/admin/main', $data);
	}
	public function view_all_order()
	{

		$data['subview'] = 'pages/admin/view_all_order';
		$data['title']   = 'View all orders';
		$data['display_data'] = $this->data_model->list_orders();
		$this->load->view('pages/admin/main', $data);
	}
	public function cancelled_order()
	{

		$data['subview'] = 'pages/admin/cancelled_order';
		$data['title']   = 'Cancelled orders';
		$data['display_data'] = $this->data_model->list_orders_cancelled();
		$this->load->view('pages/admin/main', $data);
	}
	public function pass_card_detail()
	{

		$data['subview'] = 'pages/admin/pass_card_detail';
		$data['title']   = 'View all orders';
		$data['display_data'] = $this->data_model->list_orders();
		$this->load->view('pages/admin/main', $data);
	}
	/*Function for orders*/
}
?>