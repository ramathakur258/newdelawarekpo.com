<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();  
        $this->load->database();      
    }
    public function BlogCount()
	  {		 
        $this->db->select('*');
        $this->db->from("blog");		  
        return $this->db->count_all_results();
	  }
	  public function BlogData($limit,$offset)
    {        
        $this->db->select('*');
        $this->db->from("blog");		
        $this->db->limit($limit,$offset);       
        $this->db->order_by("blog.created_at","DESC"); 
      return $this->db->get()->result();

    }

       
    
}