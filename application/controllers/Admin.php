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
<<<<<<< HEAD
}
?>
=======

   public function login(){
      $data['subview'] = 'pages/admin/loginadmin';
      $data['title'] = 'Admin System';
      $this->load->view('pages/admin/main',$data);
  }
}
?>

}
?>

>>>>>>> 44df3605acd1744b4a65b968ff935ecf7851af1b
