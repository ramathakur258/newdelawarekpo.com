<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->helper(['form','url','admin']);
        $this->load->model(['common_model','auth_model']);
        $this->load->library(['form_validation', 'session', 'pagination']);
    }
    //View Blogs
     public function index(){
            $query = "";
            if(!empty($query)){
              "?query=" . $query;
            }
            $config = getPagination();
            $config["per_page"]=5;
            $config['base_url'] = site_url("admin/blog" .$query);
            $config['total_rows'] = $this->auth_model->blogCount();
            $this->pagination->initialize($config);
            $page = isset($_GET['per_page']) ? ($_GET['per_page'] - 1) * $config["per_page"] : 0;
            $data['pagination'] = $this->pagination->create_links();
            $data['blog'] = $this->auth_model->blogData($config["per_page"], $page);
            $data['content'] ="admin/blogs";
            $this->load->view('admin_template',$data);
    } 
    //Add/Edit Blogs
    public function editblog($id=""){
        $data['blog'] = $this->common_model->GetRow('blog',['id'=>$id]);
        if($this->input->server('REQUEST_METHOD')=='POST')
        {
            $this->form_validation->set_rules('blog_title', 'Blog Title ', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('meta_title', 'Meta Title', 'required');
            $this->form_validation->set_rules('meta_keyword', 'Meta Keyword', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            if ($this->form_validation->run()== FALSE) {
            }
            else{
            $save['blog_title'] =$this->input->post('blog_title');
            $save['description'] =$this->input->post('description');
            $save['meta_title'] =$this->input->post('meta_title');
            $save['meta_keyword'] =$this->input->post('meta_keyword');
            if(!empty($id)){
              $this->common_model->UpdateData("blog",$save,['id'=>$id]);
              redirect('admin/blog');
            }else{
              $this->common_model->InsertData("blog",$save);
              redirect('admin/blog');
            }           
            }
        }
        $data['content'] = "admin/blog_edit";
        $this->load->view('admin_template', $data);
      } 
      //Delete Blogs
    public function deleteblog($id=""){
        if(!empty($id)){
               $this->common_model->DeleteData('blog',["id"=>$id]);
        }
           redirect('admin/blog');
      }     

}

    