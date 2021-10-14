<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_model extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();  
        $this->load->database();      
    }
    public function login($username)
    {
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("mobile",$username);
        $this->db->or_where("email",$username);
        $query =$this->db->get();
       // echo $this->db->last_query();die;
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }     
    }
    public function serviceCount(){
        $this->db->select('*');
        $this->db->from("service");		  
        return $this->db->count_all_results();
    }
    public function serivceData($limit,$offset){       
        $this->db->select('*');
        $this->db->from("service");       
        $this->db->limit($limit,$offset);      
        $this->db->order_by("service.created_at","ASC"); 
      return $this->db->get()->result();  
    }
    public function blogCount(){
        $this->db->select('*');
        $this->db->from("blog");		  
        return $this->db->count_all_results();
    }
    public function blogData($limit,$offset){       
        $this->db->select('*');
        $this->db->from("blog");       
        $this->db->limit($limit,$offset);      
        $this->db->order_by("blog.created_at","ASC"); 
      return $this->db->get()->result();  
    }
    public function userCount(){
        $this->db->select('*');
        $this->db->from("users");		  
        return $this->db->count_all_results();
    }
    public function userData($limit,$offset){       
        $this->db->select('*');
        $this->db->from("users");       
        $this->db->limit($limit,$offset);      
        $this->db->order_by("users.created_at","DESC"); 
      return $this->db->get()->result();  
    } 
    public function faqCount(){
        $this->db->select('*');
        $this->db->from("faq");		  
        return $this->db->count_all_results();
    }
    public function faqData($limit,$offset){       
        $this->db->select('*');
        $this->db->from("faq");       
        $this->db->limit($limit,$offset);      
        $this->db->order_by("faq.created_at","ASC"); 
      return $this->db->get()->result();  
    }         
    
}