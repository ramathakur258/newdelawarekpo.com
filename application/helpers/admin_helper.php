<?php
if(!function_exists('response')){
    function response($response){
        $ci =& get_instance();
        return $ci->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($response));
    }
}
if ( ! function_exists('get_success_alert_tpl')){
    function get_alert_tpl($str,$tpl_type='success')
    {
        return '<div class="alert alert-'.$tpl_type.' alert-dismissible fade show" role="alert">
        '.$str.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
       
    }
 }
if(!function_exists('redirect_admin')){
    function redirect_admin($str=""){
        redirect('admin/'.$str);
	}
}
if(!function_exists('admin_url')){
    function admin_url($str=""){
        return site_url('admin/'.$str);
	}
}
if(!function_exists('isAdminLogin')){
    function isAdminLogin(){
        $ci =& get_instance();
        if(!empty($ci->session->userdata('admin_id')) && !empty($ci->session->userdata('__admintoken')) && $ci->session->userdata('__admintoken')=="$2y$10dqB6vI0coniNPLuz"){
            return true;
        }else{
            redirect_admin('auth/login');
        }
	}
}
  if(!function_exists('getPagination')){
    function getPagination()
    {
      $pagiconfig=[];
      $pagiconfig['use_page_numbers'] = TRUE;
      $pagiconfig['page_query_string'] = TRUE;
      $pagiconfig["per_page"] = 10;  
      $pagiconfig['num_links'] = 5;
  
      $pagiconfig['full_tag_open'] = '<ul class="pagination">';
      $pagiconfig['full_tag_close'] = '</ul>';
      $pagiconfig['attributes'] = ['class' => 'page-link'];
      $pagiconfig['first_link'] = 'First';
      $pagiconfig['last_link'] = 'Last';
      $pagiconfig['first_tag_open'] = '<li class="page-item">';
      $pagiconfig['first_tag_close'] = '</li>';
      $pagiconfig['prev_link'] = '&laquo';
      $pagiconfig['prev_tag_open'] = '<li class="page-item">';
      $pagiconfig['prev_tag_close'] = '</li>';
      $pagiconfig['next_link'] = '&raquo';
      $pagiconfig['next_tag_open'] = '<li class="page-item">';
      $pagiconfig['next_tag_close'] = '</li>';
      $pagiconfig['last_tag_open'] = '<li class="page-item">';
      $pagiconfig['last_tag_close'] = '</li>';
      $pagiconfig['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
      $pagiconfig['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
      $pagiconfig['num_tag_open'] = '<li class="page-item">';
      $pagiconfig['num_tag_close'] = '</li>';
  
      return $pagiconfig;
  
    }



    if(!function_exists('getPage')){
      function getPage()
      {
          $config=[];
          $config['use_page_numbers'] = TRUE;
          $config['page_query_string'] = TRUE;
          $config["per_page"] = 10;  
          $config['num_links'] = 5;
        // $pagiconfig['full_tag_open'] = '<div class="blog-pagination>';
        // $pagiconfig['full_tag_close'] = '</div>';
        // $pagiconfig['attributes'] = ['class' => 'blog-pagination'];
        // $pagiconfig['first_link'] = 'First';
        // $pagiconfig['last_link'] = 'Last';
        // $pagiconfig['first_tag_open'] = '<ul >';
        // $pagiconfig['first_tag_close'] = '</ul>';
        // $pagiconfig['prev_link'] = '&laquo';
        // $pagiconfig['prev_tag_open'] = '<li >';
        // $pagiconfig['prev_tag_close'] = '</li>';
        // $pagiconfig['next_link'] = '&raquo';
        // $pagiconfig['next_tag_open'] = '<li >';
        // $pagiconfig['next_tag_close'] = '</li>';
        // $pagiconfig['last_tag_open'] = '<li> <a href="#"><i class="fas fa-long-arrow-alt-right">';
        // $pagiconfig['last_tag_close'] = '</i></a></li>';
        // $pagiconfig['cur_tag_open'] = '<li class="active"><a href="#" >';
        // $pagiconfig['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        // $pagiconfig['num_tag_open'] = '<li >';
        // $pagiconfig['num_tag_close'] = '</li>';

          $config['full_tag_open'] = "<div class='blog-pagination'><ul>";
          $config['full_tag_close'] = '</ul></div>';
          $config['num_tag_open'] = '<li>';
          $config['num_tag_close'] = '</li>';
          $config['cur_tag_open'] = '<li class="active"><a href="#">';
          $config['cur_tag_close'] = '</a></li>';
          $config['prev_tag_open'] = '<li>';
          $config['prev_tag_close'] = '</li>';
          $config['first_tag_open'] = '<li>';
          $config['first_tag_close'] = '</li>';
          $config['last_tag_open'] = '<li>';
          $config['last_tag_close'] = '</li>';
          $config['next_link'] = '<i class="fa fa-long-arrow-right"></i>';
          $config['next_tag_open'] = '<li>';
          $config['next_tag_close'] = '</li>';
          $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>';
          $config['prev_tag_open'] = '<li>';
          $config['prev_tag_close'] = '</li>';
    
        return $config;
    
      }
    }
  }

