<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Services extends CI_Controller {
   public function __construct() {
        parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model('common_model');
       $this->load->library('session');
        //isAdminLogin();
    }

        public function index(){
            $data['service'] = $this->common_model->GetResult('service');
            //  print_r($data['service']);die;
            $data['content'] ="";
            $this->load->view('web_template',$data);
        }

        public function bookkeeping(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'Bookkeeping ']);
              
          $data['content'] ="services/bookkeeping";
          $this->load->view('web_template',$data);
        }  

        public function accounting(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'Accounting ']);
            
            $data['content'] ="services/accounting";
            $this->load->view('web_template',$data);
        } 

        public function accountPayable(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'Accounts Payable']);
            
            $data['content'] ="services/account_payable";
            $this->load->view('web_template',$data);
        }  

        public function accountReceivable(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'Accounts Receivable']);
            
            $data['content'] ="services/account_receivable";
            $this->load->view('web_template',$data);
        }

        public function payroll(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'payroll']);
            
            $data['content'] ="services/payroll";
            $this->load->view('web_template',$data);
        }

        public function taxreturn(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'Tax Return Prepration']);
            
            $data['content'] ="services/taxreturn";
            $this->load->view('web_template',$data);
        }
        
        public function vat(){
            
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'VAT Prepration']);
            
            $data['content'] ="services/vat";
            $this->load->view('web_template',$data);
        }

        public function salestax(){
          
                $data['service'] = $this->common_model->GetRow("service", ['service'=>'Sales Tax  Returns']);
              
            $data['content'] ="services/salestax";
            $this->load->view('web_template',$data);
        }
    }
    