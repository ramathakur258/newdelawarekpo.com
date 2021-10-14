<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller {
   public function __construct() {
       parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model(['auth_model','common_model']);
       $this->load->library(['form_validation', 'session', 'pagination']);
    }
     public function index(){
          $query="";
          if (!empty($query)) {
          $query = "?query=" . $query;
           }
               $config = getPagination();
               $config["per_page"]=5;
               $config['base_url'] = site_url("admin/service" .$query);
               $config['total_rows'] = $this->auth_model->serviceCount();
               $this->pagination->initialize($config);
               $page = isset($_GET['per_page']) ? ($_GET['per_page'] - 1) * $config["per_page"] : 0;
               $data['pagination'] = $this->pagination->create_links();
               $data['service'] = $this->auth_model->serivceData($config["per_page"], $page);
               $data['content']="admin/services";
               $this->load->view('admin_template',$data);
     }
     //Add/Edit Services
     public function editservice($id=""){                
          $data['service'] = $this->common_model->GetRow('service',['id'=>$id]);
          if($this->input->server('REQUEST_METHOD')=='POST')
          {
               $this->form_validation->set_rules('service', 'Service', 'required');
               $this->form_validation->set_rules('description', 'Description', 'required');
               $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
               if ($this->form_validation->run()== FALSE) {
               }
               else{
               $save['service'] =$this->input->post('service');
               $save['description'] =$this->input->post('description');
               if(!empty($id)){
               $this->common_model->UpdateData("service",$save,['id'=>$id]);
               redirect('admin/service');
               }else{
               $this->common_model->InsertData("service",$save);
               redirect('admin/service');
               }           
               }
        }
          $data['content']="admin/service_edit";
          $this->load->view('admin_template',$data);
     } 
     //Delete Services
     public function deleteservice($id=""){
          if(!empty($id)){
               $this->common_model->DeleteData("service",["id"=>$id]);
               }
               redirect('admin/service');
     }      

}

    