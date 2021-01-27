<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

  protected $_tabel_utama     = 'user';
  protected $_id_utama        = 'id_user';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_user';
  protected $_timestamps      = FALSE;

  public $rules = [
    'nama_user'    => [
      'field'      => 'nama_user',
      'label'      => 'Nama User',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
    'level_user'   => [
      'field'      => 'level_user',
      'label'      => 'Level User',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
    'user_name'    => [
      'field'      => 'user_name',
      'label'      => 'User Name',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
    'pass'         => [
      'field'      => 'pass',
      'label'      => 'Password User',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
    'idwilayah'    => [
      'field'      => 'idwilayah',
      'label'      => 'Wilayah',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
    'idklasis'     => [
      'field'      => 'idklasis',
      'label'      => 'Klasis',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
    'idjemaat'     => [
      'field'      => 'idjemaat',
      'label'      => 'Jemaat',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
  ];

  public function hash($value)
  {
    return hash('sha512', $value . config_item('encryption_key'));
  }

}

/* End of file User_model.php */