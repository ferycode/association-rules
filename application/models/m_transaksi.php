<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class m_transaksi extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getall()
		{
			$q = $this->db->get('transaksi');
			return $q;

		}

		function gettransaksi($p=0, $jppage = 10)
		{
			$q = "SELECT * FROM transaksi";
			$q.=" LIMIT $p, $jppage; ";
			$trans = $this->db->query($q);
			return $trans;
		}

		function getjtransaksi()
		{
			$query = $this->db->count_all('transaksi');
			return $query;
		}

		function addtransaksi($item)
		{
			$query = "INSERT INTO transaksi(items) VALUES ('$item');";
			if ($this->db->query($query)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function updatetrans($id,$s='')
		{
			$q = "UPDATE transaksi SET items = '$s' WHERE id_transaksi = $id;";
			if ($this->db->query($q)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function selecttransaksi($id)
		{	
			$q = "SELECT * FROM transaksi WHERE id_transaksi = $id;";
			$query = $this->db->query($q);
			return $query;
		}

		function deltransaksi($id)
		{
			$q = "DELETE FROM transaksi WHERE id_transaksi = $id;";
			if ($this->db->query($q)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

	}
?>