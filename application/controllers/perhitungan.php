<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class perhitungan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_transaksi','trans');
		}

		function hitung($min_sup = 0.1, $min_conf = 0.5)
		{
			$data['title'] = "Perhitungan - Association Rule Data Mining";
			$data['keyword'] = "Perhitungan, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Perhitungan - Association Rule Data Mining";

			if ($this->input->post('min_sup')) {
				$data['min_sup'] = $this->input->post('min_sup') / 100;
			} else {
				$data['min_sup'] = $min_sup;
			}

			if ($this->input->post('min_conf')) {
				$data['min_conf'] = $this->input->post('min_conf') / 100;
			} else {
				$data['min_conf'] = $min_conf;
			}

			$data['jumlah'] = $this->trans->getjtransaksi();
			$data['hasil'] = $this->trans->getall();

			$this->template->display_main('main/perhitungan',$data);
		}

		function edit()
		{
			$data['title'] = "Edit Perhitungan - Association Rule Data Mining";
			$data['keyword'] = "Edit Perhitungan, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Edit Perhitungan - Association Rule Data Mining";

			$data['jumlah'] = $this->trans->getjtransaksi();
			$data['hasil'] = $this->trans->getall();

			$this->template->display_main('main/edit_perhitungan',$data);
		}

	}

?>