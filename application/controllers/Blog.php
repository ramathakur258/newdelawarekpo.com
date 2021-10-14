<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
   public function __construct() {
        parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model(['common_model','auth_model']);
       $this->load->library(['session','pagination']);
    
    }
        public function index(){
          $query="";

          if (!empty($query)) {
            $query = "?query=" . $query;
        }
        $config =  getPage();
        $config["per_page"]=2;
        $config['base_url'] = site_url("blog" .$query);
        $config['total_rows'] = $this->common_model->BlogCount();
        $this->pagination->initialize($config);
        $page = isset($_GET['per_page']) ? ($_GET['per_page'] - 1) * $config["per_page"] : 0;
        $data['pagination'] = $this->pagination->create_links();

        $data['blog'] = $this->common_model->BlogData($config["per_page"], $page);
        $data['faq'] = $this->common_model->records("faq");
         //print_r( $data['blog']);die;
          $data['content'] ="blog/blog";
          $this->load->view('web_template',$data);
        }  

        public function blogDetail($id){
          if($id){
            $data['blogdetail'] = $this->common_model->GetRow("blog", ['id'=>$id]);
          }
           $data['faq'] = $this->common_model->records("faq");
          
           $blogdetail =       $data['blogdetail'];
        // print_r($blogdetail);die;
           $data['desc'] = $blogdetail;
          $data['content'] ="blog/blog_detail";
          $this->load->view('web_template',$data);
        }  

    }
    