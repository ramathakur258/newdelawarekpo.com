<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->helper(['form','url','admin']);
        $this->load->library(['form_validation','session']);
        $this->load->model('common_model');
        $this->load->model('auth_model');
     //  isAdminLogin();
    }
    public function login(){
        if($this->input->server('REQUEST_METHOD')=="POST"){
            $this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[6]');           
            if ($this->form_validation->run() == TRUE){              
                $data = $this->common_model->GetRow('users',['mobile'=>$this->input->post('mobile')]);          
                if($data){               
                    if(md5($this->input->post('password')) == $data->password){
                        $setsession=[];
                        $setsession['id']=$data->id;
                        $setsession['mobile']=$data->mobile;
                        $setsession['__admintoken']="$2y$10dqB6vI0coniNPLuz";
                        $setsession['name']=$data->name;
                        $this->session->set_userdata($setsession);
                        if($data->user_type == 'ADMIN'){
                        redirect_admin('dashboard');
                        }
                       else{
                        $this->session->set_flashdata('password_error','Invalid user');
                       }                      
                    }else{
                       
                        $this->session->set_flashdata('password_error','Invalid Password');
                    }
                }
            }
        }       
        $this->load->view('admin/login');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect_admin('admin/login');
    }

}