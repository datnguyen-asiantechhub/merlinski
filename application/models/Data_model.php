<?php

class Data_model extends CI_Model
{
	public function view_edit_product(){
			$p_detail = array(
			'basic'             => [
				'name' => 'Spring season open ticket', 'code' => '214343254325',
				'description'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt risus eget semper feugiat. Duis sit amet aliquam lacus. Nulla tellus massa, gravida at risus sed, interdum semper sapien.</p>',
				'base_price'=>'20 USD'
			],
			'advance' => [
				'ticket_type'     => 'Open',
				'valid_from'        => 'The day after',
				'valid_to'     => '1 year later',
				'use_times' => 'Unlimited',
				'number_of_seats' => 80
			],
			'pricing'      => [
				'time'=>
					[
						'spring'=>'100% base price',
						'Summer'=>'50% base price',
						'Autumn'=>'70% base price',
						'Winter'=>'120% base price'
					],
				'remaining_seat' => 
					[
						'Under 25%'=>'150% base price',
						'From 25% to 50%'=>'120% base price',
						'From 50% to 75%'=>'100% base price',
						'From 75% to 100%'=>'100% base price'
					]
			],
			'media'      => array(
				'image'=> ['u68.png','u68.png','u68.png'],
				'video'=> ['u97.png']
				),
			'related_products' => [
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'Unlimited','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'Unlimited','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'1','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'1','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'1','created_on'=>'12/12/2016']				
			]

		);
		return $p_detail;
	}
	public function view_product_detail(){
		$p_detail = array(
			'basic'             => [
				'name' => 'Spring season open ticket', 'code' => '214343254325',
				'description'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt risus eget semper feugiat. Duis sit amet aliquam lacus. Nulla tellus massa, gravida at risus sed, interdum semper sapien.</p>',
				'base_price'=>'20 USD'
			],
			'advance' => [
				'ticket_type'     => 'Open',
				'valid_from'        => 'The day after',
				'valid_to'     => '1 year later',
				'use_times' => 'Unlimited',
				'number_of_seats' => 80
			],
			'pricing'      => [
				'time'=>
					[
						'spring'=>'100% base price',
						'Summer'=>'50% base price',
						'Autumn'=>'70% base price',
						'Winter'=>'120% base price'
					],
				'remaining_seat' => 
					[
						'Under 25%'=>'150% base price',
						'From 25% to 50%'=>'120% base price',
						'From 50% to 75%'=>'100% base price',
						'From 75% to 100%'=>'100% base price'
					]
			],
			'media'      => array(
				'image'=> ['u68.png','u68.png','u68.png'],
				'video'=> ['u97.png']
				),
			'related_products' => [
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'Unlimited','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'Unlimited','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'1','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'1','created_on'=>'12/12/2016'],
				['ticket'=>'2017 Season Pass','price'=>5,'use_times'=>'1','created_on'=>'12/12/2016']				
			]

		);
		return $p_detail;
	}
	public function view_all_products(){
		$products_list = array(
			array(				
				'name'          => '2017 Season Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '1800',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Half-Season Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '1200',
				'validaity'      => '12/03/2018',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			),
			array(				
				'name'          => '2017 Quater Pass',
				'status'         => '1',
				'type'         => 'open',
				'use_times'       => 'Unlimited',
				'price'          => '500',
				'validaity'      => '1 year',
				'address'       => '15 orchard road',
				'created_date' => '12/03/2017'
			)

		);
		return $products_list;
	}
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
	public function active_pass_card()
	{
		$active_pass_card = array(
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

		return $active_pass_card;
	}
	public function open_secondary_vouchers()
	{
		$open_secondary_vouchers = array(
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			)


		);

		return $open_secondary_vouchers;
	}
	public function closed_secondary_vouchers()
	{
		$closed_secondary_vouchers = array(
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			),
			array(
				'voucher'     => 'DS435SDAF',
				'issue_date' => '20/02/2017',
				'order' => '32432413412',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'off_percent'   => '10',
				'valid_to'  => '30/04/2018',
				'customer'=>'Robert Kenny'
			),
			array(
				'voucher'     => 'REWQ23426',
				'issue_date' => '20/02/2017',
				'order' => '41234141245',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Albert Ho'
			),
			array(
				'voucher'     => '32D34F2334',
				'issue_date' => '20/02/2017',
				'order' => '12343214321',
				'off_percent'   => '10',
				'use'=>0,
				'used_on'=>'',
				'valid_to'  => '30/04/2018',
				'customer'=>'Andrew Lee'
			),
			array(
				'voucher'     => 'DASF3223R',
				'issue_date' => '20/02/2017',
				'order' => '78576856745',
				'off_percent'   => '15',
				'use'=>1,
				'used_on'=>'20/05/2017',
				'valid_to'  => '30/04/2018',
				'customer'=>'Stephan Young'
			)



		);

		return $closed_secondary_vouchers;
	}
	public function list_orders_today()
	{
		$list_orders_today = array(
			array(
				'order_no'     => '343154432',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>1800,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '412341234',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>1200,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '654366736',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>500,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '323450243',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>25,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			)




		);

		return $list_orders_today;
	}
	public function list_orders()
	{
		$list_orders = array(
			array(
				'order_no'     => '343154432',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>1800,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '412341234',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>1200,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '654366736',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>500,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '323450243',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>25,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			)




		);

		return $list_orders;
	}
	public function list_orders_cancelled()
	{
		$list_orders_cancelled = array(
			array(
				'order_no'     => '343154432',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'value'=>500,
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '412341234',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>1200,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '654366736',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Mistake',
				'value'=>500,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '323450243',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>25,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Credit card'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Reschedule',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			),
			array(
				'order_no'     => '104354904',
				'customer' => 'Mr A',
				'cancel_date'=>'20/05/2017',
				'reason'=>'Others',
				'date_time'=>'20/05/2017',
				'value'=>27,
				'payment_method'=>'Paypal'
			)




		);

		return $list_orders_cancelled;
	}
}

?>