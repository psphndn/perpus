<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_digital_model extends MY_Model {
  protected $_tabel_utama     = 'jenis_digital';
  protected $_id_utama        = 'id_jenis_digital';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_jenis_digital';
  protected $_timestamps      = FALSE;

}

/* End of file Jenis_digital_model.php */
/* Location: ./application/models/Jenis_digital_model.php */