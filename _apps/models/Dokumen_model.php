<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_model extends MY_Model {
  protected $_tabel_utama     = 'dokumen';
  protected $_id_utama        = 'id_dokumen';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_dokumen';
  protected $_timestamps      = FALSE;

  public function __construct()
  {
  	parent::__construct();
  	$this->path_file = realpath(APPPATH.'../_library/dokumen');
  }

  public function upload($dokumen = '', $nama_file = '')
  {
  	$field_name				= $dokumen;
  	$config['upload_path']	= $this->path_file;
  	$config['allowed_types']= ['pdf', 'doc', 'docx', 'txt'];
  	$config['max_size']		= '1000';
  	$config['file_name']	= $nama_file;
  	$config['overwrite']	= TRUE;
  	$config['remove_space']	= TRUE;

  	$this->load->library('upload', $config);
  	if ($this->upload->do_upload($field_name))
  	{
  		$new_filename = $this->upload->file_name;
  		return $new_filename;
  	}
  	else
  	{
  		return FALSE;
  	}
  }

}

/* End of file Dokumen_model.php */
/* Location: ./application/models/Dokumen_model.php */