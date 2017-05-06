<?php

class Frontpage extends CI_Controller{
   public function __construct() {
       parent::__construct();
       $this->load->helper(array("url"));
   }
   
   public function index(){
       $data['subview'] = 'pages/frontpage/homepage';
       $data['title'] = 'Frontpage System';
       $this->load->view('pages/frontpage/main',$data);
   }
}
?>