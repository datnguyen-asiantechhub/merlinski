<?php

class Data_model extends CI_Model
{
	public function customersList()
	{
		$customers_list = array(
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'id'            => '1',
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			)

		);

		return $customers_list;


	}

	public function customerDetail()
	{
		$customer_detail = array(
			'contact'             => [
				'name' => 'Robert Kenny', 'image' => 'admin/u29.png', 'email' => 'abc@gmail.com', 'phone' => '+85555555', 'country' => 'Australia',
				'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'postal_code' => '2000'
			],
			'billing_information' => [
				'country'     => 'Australia',
				'city'        => 'Sydney',
				'address'     => 'Sydney NSW 2020,  Australia',
				'postal_code' => '2000'
			],
			'payment_method'      => [
				['payment_method_name' => 'Robert Kenny', 'payment_method_expired_date' => '12/2019', 'payment_method_cardnumber' => 'XXXX XXXX XXXX 5678', 'active' => '1'],
				['payment_method_name' => 'Robert Kenny', 'payment_method_expired_date' => '05/2020', 'payment_method_cardnumber' => 'XXXX XXXX XXXX 1234', 'active' => '0']
			],
			'pass_card_data'      => ['pass_card_serial_no' => '32412443231241', 'expried_date' => '30/04/2017'],
			'family_members_list' => [
				['id' => 1, 'name' => 'Mary', 'email' => 'mary@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555'],
				['id' => 2, 'name' => 'Tom', 'email' => 'tom@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555'],
				['id' => 3, 'name' => 'Peter', 'email' => 'peter@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555'],
				['id' => 4, 'name' => 'Albert', 'email' => 'albert@gmail.com', 'date_of_birth' => '20/02/1994', 'country' => 'Australia', 'city' => 'Sydney', 'address' => 'Sydney NSW 2020, Australia', 'phone' => '+55555555']
			],
			'access_history'      => [
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017'],
				['place' => 'Ski center A', 'status' => 'success', 'date' => '30/04/2017']
			]

		);

		return $customer_detail;

	}

	public function createdpasscardList()
	{
		$created_passcard_list = array(
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			),
			array(
				'name'          => 'robert kenny',
				'email'         => 'abc@gmail.com',
				'phone'         => '+85555555',
				'country'       => 'australia',
				'city'          => 'sydney',
				'address'       => '15 orchard road',
				'registered_on' => '12/03/2017'
			)

		);

		return $created_passcard_list;
	}

	public function lostdpasscardList()
	{
		$lostdpasscardList = array(
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			), array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),

			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			),
			array(
				'serial'     => '452345664',
				'customer'   => 'robert kenny',
				'issue_date' => '12/03/2017',
				'last_use'   => '12/03/2017',
				'lost_date'  => '12/03/2017'
			)


		);

		return $lostdpasscardList;
	}
	public function open_normal_vouchers_list()
	{
		$open_normal_vouchers_list = array(
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			)


		);

		return $open_normal_vouchers_list;
	}
	public function closed_vouchers_list()
	{
		$closed_vouchers_list = array(
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'single'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'type'=>'Unlimited'
			)


		);

		return $closed_vouchers_list;
	}
	public function inactive_pass_card()
	{
		$inactive_pass_card = array(
			array(
				'serial'     => '452345664',
				'customer'     => 'Robert Kenny',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',


			),
			array(
				'serial'     => '098028235',
				'customer'     => 'Albert Ho',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '453729523',
				'customer'     => 'Andrew Lee',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '120930845',
				'customer'     => 'Stephan Young',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '435793255',
				'customer'     => 'Marc Batra',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '452345664',
				'customer'     => 'Robert Kenny',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '098028235',
				'customer'     => 'Albert Ho',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '453729523',
				'customer'     => 'Andrew Lee',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '120930845',
				'customer'     => 'Stephan Young',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '435793255',
				'customer'     => 'Marc Batra',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '452345664',
				'customer'     => 'Robert Kenny',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '098028235',
				'customer'     => 'Albert Ho',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '453729523',
				'customer'     => 'Andrew Lee',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '120930845',
				'customer'     => 'Stephan Young',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '435793255',
				'customer'     => 'Marc Batra',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '452345664',
				'customer'     => 'Robert Kenny',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '098028235',
				'customer'     => 'Albert Ho',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '453729523',
				'customer'     => 'Andrew Lee',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '120930845',
				'customer'     => 'Stephan Young',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '435793255',
				'customer'     => 'Marc Batra',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '452345664',
				'customer'     => 'Robert Kenny',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '098028235',
				'customer'     => 'Albert Ho',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '453729523',
				'customer'     => 'Andrew Lee',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '120930845',
				'customer'     => 'Stephan Young',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			),
			array(
				'serial'     => '435793255',
				'customer'     => 'Marc Batra',
				'issue_date' => '05/02/2017',
				'last_use' => '15/04/2017',

			)


		);

		return $inactive_pass_card;
	}
}

?>