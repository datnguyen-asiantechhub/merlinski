<?php
class Admin extends CI_Controller{
   public function __construct() {
       parent::__construct();
       $this->load->helper(array("url"));
   }
   
   public function index(){
       $data['subview'] = 'pages/admin/homepage';
       $data['title'] = 'Admin System';
       $this->load->view('pages/admin/main',$data);
   }

   public function login(){
      $data['subview'] = 'pages/admin/loginadmin';
      $data['title'] = 'Admin System';
      $this->load->view('pages/admin/main',$data);
  }
  public function Create(){
      $data['subview'] = 'pages/admin/Create_new_voucher';
      $data['title'] = 'Admin System';
      $this->load->view('pages/admin/main',$data);
  }
  public function content(){
      $data['subview'] = 'pages/admin/Main_content';
      $data['title'] = 'Admin System';
      $this->load->view('pages/admin/main',$data);
  }
}
?>

}
?>

