<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class transaksi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_transaksi','trans');
		}

		function lihat($p = 0)
		{
			$jppage = 10;
			$this->load->library("pagination");
			$config["base_url"] = site_url()."transaksi/lihat/";
			$config["total_rows"] = $this->trans->getjtransaksi();
			$config["per_page"] = $jppage;
			$config['next_link'] = '&raquo;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			
			$data["pagination"]=$this->pagination->create_links();
			$data["hasil"]=$this->trans->gettransaksi($p, $jppage);

			$data['title'] = "Lihat Data Transaksi - Association Rule Data Mining";
			$data['keyword'] = "Lihat Data Transaksi, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Lihat Data Transaksi - Association Rule Data Mining";

			$this->template->display_main('main/lihat_transaksi',$data);
		}

		function tambah()
		{
			$data['title'] = "Tambah Data Transaksi - Association Rule Data Mining";
			$data['keyword'] = "Tambah Data Transaksi, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Tambah Data Transaksi - Association Rule Data Mining";

			$this->template->display_main('main/tambah_transaksi',$data);
		}

		function doadd()
		{
			$item = $this->input->post('item');
			$add = $this->trans->addtransaksi($item);
			if ($add) {
				$this->session->set_flashdata('sukses', '<strong>Tambah data berhasil</strong> Data berhasil disimpan.');
				redirect(base_url().'transaksi/lihat');
			} else {
				$this->session->set_flashdata('gagal', '<strong>Tambah data gagal</strong> Data tidak disimpan.');
				redirect(base_url().'transaksi/lihat');
			}
		}

		function edit($id)
		{
			$data['title'] = "Edit Data Transaksi - Association Rule Data Mining";
			$data['keyword'] = "Edit Data Transaksi, Association Rule, Data Mining, Kelompok 10";
			$data['description'] = "Edit Data Transaksi - Association Rule Data Mining";

			$hasil = $this->trans->selecttransaksi($id)->row_array(0);
			$data['id'] = $hasil['id_transaksi'];
			$data['items'] = $hasil['items'];

			$this->template->display_main('main/edit_transaksi',$data);
		}

		function doedit($id)
		{
			$text = $this->input->post('item');
			$update = $this->trans->updatetrans($id,$text);
			if ($update) {
			   	$this->session->set_flashdata('sukses', '<strong>Edit berhasil</strong> Data berhasil disimpan.');
				redirect(base_url().'transaksi/lihat');
			} else {
				$this->session->set_flashdata('gagal', '<strong>Edit gagal</strong> Data tidak disimpan.');    
				redirect(base_url().'transaksi/lihat');
			}			
		}

		function delete($id)
		{
			$del = $this->trans->deltransaksi($id);
			if ($del) {
				$this->session->set_flashdata('sukses', '<strong>Hapus data berhasil</strong> Data berhasil hapus.');
				redirect(base_url().'transaksi/lihat');
			} else {
				$this->session->set_flashdata('gagal', '<strong>Hapus data gagal</strong> Data tidak disimpan.');
				redirect(base_url().'transaksi/lihat');
			}
		}

	}

?>