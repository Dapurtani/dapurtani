<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

   function insert($table = '', $data = '')
   {
      $this->db->insert($table, $data);
   }

	function insert_last($table = '', $data = '')
   {
      $this->db->insert($table, $data);

		return $this->db->insert_id();
   }

	function get_all($table)
	{
		$this->db->from($table);

		return $this->db->get();
	}

	function komentar($table)
	{
		$this->db->from($table);
		$this->db->order_by("id_s_pemesanan", 'DESC');
		return $this->db->get();
	}

	function get_all_status($table)
	{
		$this->db->from($table);
		 $this->db->order_by("id_order", 'DESC');

		return $this->db->get();
	}

	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function in()
	{
		$names = array('-- Tamalanrea --', '-- Biring Kanaya --', '-- Panakkukang --', '-- Manggala --', 'Tamalanrea', 'Biring Kanaya', 'Panakkukang', 'Manggala');
		$this->db->select('*');
		$this->db->from('t_order');
		$this->db->where_in('kecamatan', $names);
		return $this->db->get();
	}

	function select_all($select, $table)
	{
		$this->db->select($select);
		$this->db->from($table);

		return $this->db->get();
	}

	function select_where($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function update($table = null, $data = null, $where = null)
	{
		$this->db->update($table, $data, $where);
	}

	function delete($table = null, $where = null)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function report($where = '')
	{
		$this->db->select('*');
		$this->db->from('t_order');
		$this->db->join('t_detail_order','t_detail_order.id_order=t_order.id_order');
		$this->db->where($where);
		$this->db->order_by('t_order.id_order');
		return $this->db->get();
	} 

	function count($table='')
	{
		return $this->db->count_all($table);
	}

	function count_where($table='', $where = '')
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->count_all_results();
	}

	function last($table, $limit, $order)
	{
		$this->db->from($table);
		$this->db->limit($limit);
		$this->db->order_by($order, 'DESC');

		return $this->db->get();
	}

 public function duatable() {
 $this->db->select('*');
 $this->db->from('t_order');
 $this->db->join('t_detail_order','t_detail_order.id_order=t_order.id_order');
 $this->db->order_by('id_user', 'DESC');
 return $this->db->get()->result();
}

function hapus_join()
{
	$this->db->from('t_order');
$this->db->join('t_detail_order', 't_detail_order.id_order');
$this->db->where('t_order', $where);
$this->db->delete('t_order');
}

function edit_data($where,$table)
{
	$this->db->order_by("tgl_pesan", 'DESC');
	$this->db->get_where($table,$where);
}

function update_data($where,$data,$table)
{
	$this->db->where($where);
	$this->db->update($table,$data);
}

function hapus_data($where,$table)
{
	$this->db->where($where);
	$this->db->delete($table);
}
}
