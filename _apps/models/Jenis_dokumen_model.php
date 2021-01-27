<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_dokumen_model extends MY_Model {
  protected $_tabel_utama     = 'jenis_dokumen';
  protected $_id_utama        = 'id_jenis_dokumen';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_jenis_dokumen';
  protected $_timestamps      = FALSE;

}

/* End of file Jenis_dokumen_model.php */
/* Location: ./application/models/Jenis_dokumen_model.php */