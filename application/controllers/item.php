<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class item extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function lihat()
		{
			$data["file"] = file(base_url().'assets/data/item.txt');
			$data['title'] = "Lihat Data Item - Association Rule Data Mining";
			$data['keyword'] = "Lihat Data Item, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Lihat Data Item - Association Rule Data Mining";

			$this->template->display_main('main/lihat_item',$data);
		}

		function edit()
		{
			$data["file"] = read_file('assets/data/item.txt');
			$data['title'] = "Edit Data Transaksi - Association Rule Data Mining";
			$data['keyword'] = "Edit Data Transaksi, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Edit Data Transaksi - Association Rule Data Mining";

			$this->template->display_main('main/edit_item',$data);
		}

		function doedit()
		{
			$text = $this->input->post('item');
			if (!write_file('assets/data/item.txt', $text)) {
			   	$this->session->set_flashdata('gagal', '<strong>Edit gagal</strong> Data tidak disimpan.');
				redirect(base_url().'item/edit');
			} else {
			    $this->session->set_flashdata('sukses', '<strong>Edit berhasil</strong> Data berhasil disimpan.');
				redirect(base_url().'item/edit');
			}			
		}

	}
?>