<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_buku_model extends MY_Model {
  protected $_tabel_utama     = 'jenis_buku';
  protected $_id_utama        = 'id_jenis_buku';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_jenis_buku';
  protected $_timestamps      = FALSE;

}

/* End of file Jenis_buku_model.php */
/* Location: ./application/models/Jenis_buku_model.php */