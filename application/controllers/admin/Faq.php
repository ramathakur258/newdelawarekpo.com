<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faq extends CI_Controller {
   public function __construct() {
        parent::__construct();
       $this->load->helper(['form','url','admin']);
       $this->load->model(['common_model','auth_model']);
       $this->load->library(['form_validation', 'session', 'pagination']);
    }
    //View FAQ
     public function index(){
          $query = "";
          if (!empty($query)) {
            $query = "?query=" . $query;
             }
          $config = getPagination();
          $config['per_page'] = 5;
          $config['base_url'] = site_url("admin/faq" .$query);
          $config['total_rows'] = $this->auth_model->faqCount();
          $this->pagination->initialize($config);
          $page = isset($_GET['per_page']) ? ($_GET['per_page'] - 1) * $config["per_page"] : 0;
          $data['pagination'] = $this->pagination->create_links();
          $data['faq'] = $this->auth_model->faqData($config["per_page"], $page);
          //$data['faq'] = $this->common_model->GetResult('faq');
          $data['content'] ="admin/faq";
          $this->load->view('admin_template',$data);
    } 
    //Add/Edit FAQ
    public function editfaq($id=""){
          $data['faq'] = $this->common_model->GetRow('faq',['id'=>$id]);
          if($this->input->server('REQUEST_METHOD')=='POST')
          {
                $this->form_validation->set_rules('question', 'Question ', 'required');
                $this->form_validation->set_rules('description', 'Description', 'required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                if ($this->form_validation->run()== FALSE) {
                }
                else{
                $save['question'] =$this->input->post('question');
                $save['description'] =$this->input->post('description');
                if(!empty($id)){
                  $this->common_model->UpdateData("faq",$save,['id'=>$id]);
                      redirect('admin/faq');
                }else{
                  $this->common_model->InsertData("faq",$save);
                  redirect('admin/faq');
                }           
                }
        }
        $data['content'] = "admin/faq_edit";
        $this->load->view('admin_template', $data);
      } 
      //Delete Blogs
      public function deletefaq($id=""){
        if(!empty($id)){
               $this->common_model->DeleteData('faq',["id"=>$id]);
        }
           redirect('admin/faq');
      }     
}
    