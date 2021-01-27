<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends MY_Model {

  protected $_tabel_utama     = 'level';
  protected $_id_utama        = 'id_level';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_level';
  protected $_timestamps      = FALSE;

}

/* End of file Level_model.php */
/* Location: .//C/xampp/htdocs/siget/_apps/models/Level_model.php */