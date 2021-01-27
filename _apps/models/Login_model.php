<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends MY_Model 
{

  protected $_tabel_utama     = 'user';
  protected $_id_utama        = 'id_user';
  protected $_primary_filter  = 'intval';
  protected $_order_by        = 'id_user';
  protected $_timestamps      = FALSE;

  public $rules = [
    'user_name'     => [
      'field'       => 'user_name',
      'label'       => 'User Name',
      'rules'       => 'trim|required',
      'errors'      => [
        'required'  => '{field} wajib diisi!'
      ]
    ],
    'userpass'     => [
      'field'      => 'userpass',
      'label'      => 'Password User',
      'rules'      => 'trim|required',
      'errors'     => [
        'required' => '{field} wajib diisi!'
      ]
    ],
  ];

  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $password = $this->input->post('userpass');
    $user     = $this->get_by([
      'user_name'     => $this->input->post('user_name'),
      'password'      => $this->hash($password),
      'validasi_user' => 'ya'
    ], TRUE);
    
    if(count($user))
    {
      $data = array(
        'id_user'       => $user->id_user,
        'level'         => $user->id_level,
        'nama_user'     => $user->nama_user,
        'nomor_hp'      => $user->nomor_hp,
        'password'      => $user->backuppass,
        'username'      => $user->user_name,
        'sudah_login'   => TRUE
      );

      $this->session->set_userdata($data);
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
  }

  public function cek_login()
  {
    return (bool) $this->session->userdata('sudah_login');
  }

  public function hash($value)
  {
    return hash('sha512', $value . config_item('encryption_key'));
  }

}

/* End of file Login_model.php */