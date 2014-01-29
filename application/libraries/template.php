<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class template 
	{
		protected $_ci;
		
		function __construct(){
 			$this->_ci =&get_instance();
 		} 

 		function display_main($template, $data=null)
 		{
 			$data['_meta'] = $this->_ci->load->view('template/meta', $data, true);
 			$data['_top'] = $this->_ci->load->view('template/top', $data, true);
 			$data['_center'] = $this->_ci->load->view($template, $data, true);
 			$data['_bottom'] = $this->_ci->load->view('template/bottom', $data, true);

 			$this->_ci->load->view('/template.php', $data);
 		}

	}
?>