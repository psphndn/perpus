<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $_tabel_utama 	= '';
	protected $_id_utama 		= '';
	protected $_primary_filter 	= 'intval';
	protected $_order_by 		= '';
	protected $_timestamps 		= FALSE;

	public $rules = array();

	public function __construct()
	{
		parent::__construct();
	}

  /*Di Controller User dan Admin*/
	public function get($id = NULL, $single = FALSE)
	{
		if($id !== NULL)
		{
			$filter 	= $this->_primary_filter;
			$id 	  	= $filter($id);
			$this->db->where($this->_id_utama, $id);
			$method 	= 'row';
		}
		elseif($single === TRUE)
		{
			$method 	= 'row';
		}
		else
		{
			$method		= 'result';
		}

		$this->db->order_by($this->_order_by);
		return $this->db->get($this->_tabel_utama)->$method();
	}

	public function get_by($where, $single = FALSE)
	{
		$this->db->where($where);
		return $this->get(NULL, $single);
	}

	public function save($data, $id = NULL)
  {
    // Insert
    if($id === NULL)
    {
      $this->db->insert($this->_tabel_utama, $data);
    }

    // Update
    else
    {
      $filter = $this->_primary_filter;
      $id     = $filter($id);
      $this->db->where($this->_id_utama, $id);
      $this->db->update($this->_tabel_utama, $data);
    }
    $id = $this->db->insert_id();
    return $id;
  }

	public function delete($id)
	{
		$filter 	= $this->_primary_filter;
		$id 	  	= $filter($id);
		$this->db->where($this->_id_utama, $id);
		$this->db->delete($this->_tabel_utama);
	}

  public function get_list_admin($id = NULL, $where = '', $single = FALSE)
  {
    $this->db->join('level AS lvl', $this->_tabel_utama.'.id_level = lvl.id_level', 'left');
    if($where !== '') {$this->db->where($where);}
    if($id !== NULL)
    {
      $filter   = $this->_primary_filter;
      $id       = $filter($id);
      $this->db->where($this->_id_utama, $id);
      $method   = 'row';
    }
    elseif($single === TRUE)
    {
      $method   = 'row';
    }
    else
    {
      $method   = 'result';
    }

    return $this->db->get($this->_tabel_utama)->$method();
  }

  public function get_by_one_join($id = NULL, $tabel = '', $join = '', $where = 'False', $single = FALSE)
  {
  	if ($where !== 'False')
  	{
  		$this->db->where($where);
  	}
  	$this->db->join($tabel, $this->_tabel_utama.'.'.$join.'='.$tabel.'.'.$join, 'left');
  	return $this->get($id, $single);
  }

  public function get_by_two_join($id = NULL, $tabel = '', $joins = '', $joind = '', $where = 'False', $single = FALSE)
  {
  	if ($where !== 'False')
  	{
  		$this->db->where($where);
  	}
  	$this->db->join($tabel, $this->_tabel_utama.'.'.$joins.'='.$tabel.'.'.$joins, 'left');
  	$this->db->join($tabel, $this->_tabel_utama.'.'.$joind.'='.$tabel.'.'.$joind, 'left');
  	return $this->get($id, $single);
  }

  public function get_buku($id = NULL, $where, $single = FALSE)
  {
    $this->db->where($where);
    $this->db->join('penerbit AS p', $this->_tabel_utama.'.id_penerbit = p.id_penerbit', 'left');
    $this->db->join('jenis_buku AS jns', $this->_tabel_utama.'.id_jenis_buku = jns.id_jenis_buku', 'left');
    return $this->get($id, $single);
  }

}

/* End of file MY_Model.php */