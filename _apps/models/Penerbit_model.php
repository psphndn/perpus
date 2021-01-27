<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit_model extends MY_Model {
  protected $_tabel_utama     = 'penerbit';
  protected $_id_utama        = 'id_penerbit';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_penerbit';
  protected $_timestamps      = FALSE;

}

/* End of file Penerbit_model.php */
/* Location: ./application/models/Penerbit_model.php */