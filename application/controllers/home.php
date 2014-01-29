<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->home();
		}

		function home()
		{
			$data['title'] = "Association Rule Data Mining - Kelompok 10";
			$data['keyword'] = "Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Association Rule Data Mining - Kelompok 10";
	        
			$this->template->display_main('main/home', $data);
		}

		function menu()
		{

			$data['title'] = "Association Rule Data Mining - Kelompok 10";
			$data['keyword'] = "Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Association Rule Data Mining - Kelompok 10";
	        
			$this->template->display_main('main/menu', $data);
		}

		function kelompok()
		{
			$data['title'] = "Kelompok 10 - Association Rule Data Mining";
			$data['keyword'] = "Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Association Rule Data Mining - Kelompok 10";
	        
			$this->template->display_main('main/kelompok', $data);
		}

	}
?>