<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class m_transaksi2 extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getall()
		{
			$q = $this->db->get('transaksi2');
			return $q;

		}

		function gettransaksi($p=0, $jppage = 10)
		{
			$q = "SELECT * FROM transaksi2";
			$q.=" LIMIT $p, $jppage; ";
			$trans = $this->db->query($q);
			return $trans;
		}

		function getjtransaksi()
		{
			$query = $this->db->count_all('transaksi2');
			return $query;
		}

		function addtransaksi($item)
		{
			$query = "INSERT INTO transaksi2(items) VALUES ('$item');";
			if ($this->db->query($query)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function updatetrans($id,$s='')
		{
			$q = "UPDATE transaksi2 SET items = '$s' WHERE id_transaksi = $id;";
			if ($this->db->query($q)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function selecttransaksi($id)
		{	
			$q = "SELECT * FROM transaksi2 WHERE id_transaksi = $id;";
			$query = $this->db->query($q);
			return $query;
		}

		function deltransaksi($id)
		{
			$q = "DELETE FROM transaksi2 WHERE id_transaksi = $id;";
			if ($this->db->query($q)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

	}
?>