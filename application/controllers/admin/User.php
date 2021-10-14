<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
   public function __construct() {
        parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model(['common_model','auth_model']);
       $this->load->library(['form_validation', 'session', 'pagination']);
        //isAdminLogin();
    }
    //View User Detail List
     public function index(){

          $query = "";
          if(!empty($query)){
          $query = "?query=" . $query; 
          }
          $config = getPagination();
          $config['per_page'] = 5;
          $config['base_url'] = site_url("admin/user" .$query);
          $config['total_rows'] = $this->auth_model->userCount();
          $this->pagination->initialize($config);
          $page = isset($_GET['per_page']) ? ($_GET['per_page'] - 1) * $config["per_page"] : 0;
          $data['pagination'] = $this->pagination->create_links();
          $data['user'] = $this->auth_model->userData($config["per_page"], $page);
          $data['content'] ="admin/user";
          $this->load->view('admin_template',$data);
    } 
   
}
    