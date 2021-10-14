
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->db->query("SET time_zone='+5:30'");
    }
    public function GetResult($table,$where=array(),$field="*", $order_by=""){
		$this->db->select($field);
		$this->db->from($table);
		if(!empty($where)){
			$this->db->where($where);
		}
		if(!empty($order_by)){
		    $this->db->order_by($order_by['key'],$order_by['value']);
		}
		return $this->db->get()->result();
	}
	public function GetRow($table,$where=array(),$field="*"){
		$this->db->select($field);
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get()->row();
	}
	public function CountResults($table,$where=array()){
		$this->db->where($where);
		return $this->db->count_all_results($table);
	}
	public function DeleteData($table,$where){
		$this->db->where($where);
		return  $this->db->delete($table);
	}
	public function InsertBatch($table,$data){
	    print_r($table);
	    print_r($data); die;
		return  $this->db->insert_batch($table,$data);
	}
	public function InsertData($table,$data){
	return $this->db->insert($table,$data);
	}
	public function UpdateData($table,$data,$where){
		$this->db->where($where);
		return  $this->db->update($table,$data);
	}
	public function UpdateResultData($table,$data,$where,$w){
		$this->db->where($where);
    	$this->db->or_where($w);
		return  $this->db->update($table,$data);
	}
	public function UpdateWhereIn($table,$data,$where,$in){
		$this->db->where_in($where,$in);
		return  $this->db->update($table,$data);
	}
	public function GetListData($limit,$start,$where=[],$like=[],$order_by='', $table){
        $this->db->select('*');
        $this->db->from($table);
        if(!empty($where))
        {
            $this->db->where($where); 

        }
        if(!empty($like)) {
            $i=true;
            foreach($like as $key=>$value)
            {
                if($i)
                    $this->db->like($key, $value, 'both'); 
                else
                    $this->db->or_like($key, $value, 'both'); 
            }            

        }
        $this->db->order_by($order_by['key'],$order_by['value']);
        $this->db->limit($start ,$limit);
        $query = $this->db->get();
        return $query->result();
    }    
	 public function records($table,$where=[],$select="*"){
          $this->db->select($select);
          $this->db->from($table);   
          if(!empty($where)){
              $this->db->where($where);           
          }
          $result=$this->db->get();
          if($result->num_rows() > 0)
          {
              return $result->result();
          }else{
              return false;
          }    
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

      // echo "<pre>"; print_r($this->db->get()->result()); die;
    }

}