<?php
/**
 * Created by PhpStorm.
 * User: trang
 * Date: 01/05/2017
 * Time: 20:01
 */
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
    // Hàm khởi tạo
    function __construct() {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
    }
  
    // Hàm load form login
    public function load()
    {
    	$data = array(
            'title' => 'Đây là trang login',
            'message' => 'Nhập Thông Tin Đăng Nhập'
        );
        // Load view
        $this->load->view('pages/login_view',$data);
    }
}