<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Terms extends CI_Controller {
   public function __construct() {
        parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model('common_model');
       $this->load->library('session');
        //isAdminLogin();
    }
        public function index(){

          $data['content'] ="terms";
          $this->load->view('web_template',$data);
        }  
    
    }
    