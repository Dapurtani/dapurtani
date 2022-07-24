<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function insert($table = '', $data = '')
	{
		return $this->db->insert($table, $data);
	}

	function get_all($table, $field)
	{
		$this->db->from($table);
		$this->db->order_by($field, 'ASC');
		return $this->db->get();
	}

	function kebutuhan()
	{

		$this->db->limit(4); //100 Data yang akan muncul
		$query =  $this->db->order_by('nm_barang', 'ASC')->get('t_d_kebutuhan');
		return $query->result();
	}

	function get_limit()
	{
		$this->db->limit(4); //100 Data yang akan muncul
		$query =  $this->db->order_by('nama_sayur', 'ASC')->get('t_sayur');
		return $query->result();
	}

	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	function history($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by('id_order', 'DESC');
		return $this->db->get();
	}

	function get_sayur()
	{
		$this->db->limit(4);
		$this->db->select('*');
		$this->db->from('t_sayur');
		$this->db->join('t_detail_order', 't_detail_order.id_sayur=t_sayur.id_sayur');
		$query = $this->db->get();
		return $query->result();
	}

	function update($table = null, $data = null, $where = null)
	{
		return $this->db->update($table, $data, $where);
	}

	function delete($table = null, $where = null)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('t_sayur');
		$this->db->like('nama_sayur', $keyword);
		$this->db->or_like('nama_petani', $keyword);
		$this->db->or_like('harga', $keyword);
		return $this->db->get();
	}

	function pencarian($keyword)
	{
		$this->db->select('*');
		$this->db->from('t_d_kebutuhan');
		$this->db->like('nm_barang', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('harga', $keyword);
		return $this->db->get();
	}
}
