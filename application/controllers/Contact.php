<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Contact extends CI_Controller {
   public function __construct() {
        parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model('common_model');
       $this->load->library('session');
       
    }
        public function index(){
          $data['faq'] = $this->common_model->records("faq");
         
          if($this->input->server('REQUEST_METHOD')=='POST')
          {		

            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            if ($this->form_validation->run() == FALSE)
            {
                    
            }
            else
            {    
            $save['name'] =$this->input->post('name');
            $save['mobile'] =$this->input->post('mobile');
            $save['email'] =$this->input->post('email');
            $save['message'] =$this->input->post('message');
          
            $this->common_model->InsertData("users",$save);
            $toEmail= "ramasmt12@gmail.com";
            $mailHeaders = "From: " .$save['name'] . "<".  $save['email'] .">\r\n";
              if( mail( $toEmail,"Delaware KPO Inquiry",  $save['message'], $mailHeaders)){
                $data['msg'] = '<p class="alert alert-success">Thank you for getting in touch. We will respond to you very soon.</p>';
              
              }else{
                $data['msg'] = '<p class="alert alert-danger">Error in mail sending...</p>';
              
              }
        
            }
          }
          $data['content'] ="contact";
          $this->load->view('web_template',$data);
        }  
   
    
  }