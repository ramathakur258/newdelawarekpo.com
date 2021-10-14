<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->helper(['form','url','admin']);
        $this->load->model('common_model');
    }
     public function index(){
        
        $data['count_blog']  = $this->db->count_all_results('blog');
        $data['count_service'] = $this->common_model->CountResults('service');
        $data['contact_count'] = $this->common_model->CountResults('users',['user_type'=>'USER']);
        $data['content'] = 'admin/index';
        $this->load->view('admin_template',$data);
        }       
    }

    