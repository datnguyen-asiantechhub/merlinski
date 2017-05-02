<?php
/**
 * Created by PhpStorm.
 * User: trang
 * Date: 01/05/2017
 * Time: 20:01
 */
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Hello extends CI_Controller
{
    // Hàm khởi tạo
    function __construct() {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
    }
  
    public function index()
    {
        echo 'Freetuts.net';
    }
}