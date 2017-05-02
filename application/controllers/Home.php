<?php

class Home extends CI_Controller
{
	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url"));
	}

	public function index()
	{
		$this->data = array(
            'title' => 'Site Admin Homepage',
            'message' => 'Nhập Thông Tin Đăng Nhập'

        );
		/*if ($this->my_auth->is_Login())
		{
			$this->data['email'] = $this->session->userdata['sup_email'];
			$sup_id = $this->session->userdata['sup_id'];
		}
		else
		{
			redirect(base_url() . 'login');
		}

		$this->data['title'] = "Homepage";
		$this->data['base_url'] = base_url();
		$orders = $this->model_order->get_orders('', $sup_id);
		$count_orders = count($orders);
		$order_day = $this->model_order->get_orders_format('d-m-Y', '', $sup_id);
		$order_week = $this->model_order->get_orders_format('W', '', $sup_id);
		$order_month = $this->model_order->get_orders_format('m', '', $sup_id);
		$this->data['count_orders'] = $count_orders;
		$this->data['order_day'] = $order_day;
		$this->data['order_week'] = $order_week;
		$this->data['order_month'] = $order_month;

		$new_orders = $this->model_order->get_orders('', $sup_id, 1);
		$count_new_orders = count($new_orders);
		$new_order_month = $this->model_order->get_orders_format('m', 1, $sup_id);
		$this->data['count_new_orders'] = $count_new_orders;
		$this->data['new_order_month'] = $new_order_month;

		$revenue_day = $this->model_order->get_order_revenue('d-m-Y', $sup_id, 5);
		$revenue_week = $this->model_order->get_order_revenue('W', $sup_id, 5);
		$revenue_month = $this->model_order->get_order_revenue('m', $sup_id, 5);
		$revenue_year = $this->model_order->get_order_revenue('Y', $sup_id, 5);
		$this->data['revenue_day'] = $revenue_day;
		$this->data['revenue_week'] = $revenue_week;
		$this->data['revenue_month'] = $revenue_month;
		$this->data['revenue_year'] = $revenue_year;

		$this->load->view('sasscompile/build');
		$this->load->view('templates/header', $this->data);
		$this->load->view('pages/homepage', $this->data);
		$this->load->view('templates/footer');
	}*/

	$this->load->view('sasscompile/build');
	$this->load->view('templates/header', $this->data);
	//$this->load->view('pages/homepage', $this->data);
	//$this->load->view('templates/footer');
}
}
?>
