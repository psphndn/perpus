<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Digital_model extends MY_Model {
  protected $_tabel_utama     = 'digital';
  protected $_id_utama        = 'id_digital';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_digital';
  protected $_timestamps      = FALSE;

   public function __construct()
  {
  	parent::__construct();
  	$this->path_file = realpath(APPPATH.'../_library/digital');
  }

  public function upload($digital = '', $nama_file = '')
  {
  	$field_name				= $digital;
  	$config['upload_path']	= $this->path_file;
  	$config['allowed_types']= ['jpg', 'jpeg', 'png', 'mp4'];
  	$config['max_size']		= '262144000';
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

/* End of file Digital_model.php */
/* Location: ./application/models/Digital_model.php */