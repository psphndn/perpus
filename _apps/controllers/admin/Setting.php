<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    
    $this->data['title']    = 'Setting | SIGET';
    $this->load->model(['User_model', 'Level_model', 'Penerbit_model', 'Jenis_buku_model', 'Jenis_digital_model', 'Jenis_dokumen_model']);
  }

  public function penerbit($id=NULL)
  {
    $this->data['link']               = 'admin/setting/penerbit/';
    $this->data['breadcrumb_header']  = 'Setting Profile Admin';
    $this->data['breadcrumb_title']   = 'Setting';
    $this->data['breadcrumb']         = 'Profile';

    $this->data['listpenerbit']       = $this->Penerbit_model->get();
    $this->data['penerbit']           = $this->Penerbit_model->get($id);

    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          'penerbit' => $this->input->post('penerbit')
        ]
      );
      $this->Penerbit_model->save($data);
      redirect('admin/setting/penerbit','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'penerbit' => $this->input->post('penerbit')
        ]
      );
      $this->Penerbit_model->save($data, $id);
      redirect('admin/setting/penerbit','Location');
    }
   
    $this->load->view('admin/_setting/penerbit', $this->data, FALSE);

  }

   public function jenis_buku($id=NULL)
  {
    $this->data['link']               = 'admin/setting/jenis_buku/';
    $this->data['breadcrumb_header']  = 'Setting Profile Admin';
    $this->data['breadcrumb_title']   = 'Setting';
    $this->data['breadcrumb']         = 'Profile';

    $this->data['listjenisbuku']      = $this->Jenis_buku_model->get();
    $this->data['jenis_buku']         = $this->Jenis_buku_model->get($id);

    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          'jenis_buku' => $this->input->post('jenis_buku')
        ]
      );
      $this->Jenis_buku_model->save($data);
      redirect('admin/setting/jenis_buku','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'jenis_buku' => $this->input->post('jenis_buku')
        ]
      );
      $this->Jenis_buku_model->save($data, $id);
      redirect('admin/setting/jenis_buku','Location');
    }
   
    $this->load->view('admin/_setting/jenis_buku', $this->data, FALSE);

  }

  public function jenis_digital($id=NULL)
  {
    $this->data['link']               = 'admin/setting/jenis_digital/';
    $this->data['breadcrumb_header']  = 'Setting Profile Admin';
    $this->data['breadcrumb_title']   = 'Setting';
    $this->data['breadcrumb']         = 'Profile';

    $this->data['listjenisdigital']      = $this->Jenis_digital_model->get();
    $this->data['jenis_digital']         = $this->Jenis_digital_model->get($id);

    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          'jenis_digital' => $this->input->post('jenis_digital')
        ]
      );
      $this->Jenis_digital_model->save($data);
      redirect('admin/setting/jenis_digital','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'jenis_digital' => $this->input->post('jenis_digital')
        ]
      );
      $this->Jenis_digital_model->save($data, $id);
      redirect('admin/setting/jenis_digital','Location');
    }
   
    $this->load->view('admin/_setting/jenis_digital', $this->data, FALSE);

  }

  public function jenis_dokumen($id=NULL)
  {
    $this->data['link']               = 'admin/setting/jenis_dokumen/';
    $this->data['breadcrumb_header']  = 'Setting Profile Admin';
    $this->data['breadcrumb_title']   = 'Setting';
    $this->data['breadcrumb']         = 'Profile';

    $this->data['listjenisdokumen']      = $this->Jenis_dokumen_model->get();
    $this->data['jenis_dokumen']         = $this->Jenis_dokumen_model->get($id);

    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          'jenis_dokumen' => $this->input->post('jenis_dokumen')
        ]
      );
      $this->Jenis_dokumen_model->save($data);
      redirect('admin/setting/jenis_dokumen','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'jenis_dokumen' => $this->input->post('jenis_dokumen')
        ]
      );
      $this->Jenis_dokumen_model->save($data, $id);
      redirect('admin/setting/jenis_dokumen','Location');
    }
   
    $this->load->view('admin/_setting/jenis_dokumen', $this->data, FALSE);

  }
  
  public function edit_buku($iddaftarbuku=NULL)
  {
    $data['buku']           = $this->Daftar_buku_model->get_by_join($iddaftarbuku, '', 'jenis_buku', 'id_jenis_buku', TRUE);
    $data['list_penerbit']  = $this->Jenis_buku_model->get();
    if ($this->input->post('update')) 
    {
      $data = (
        [
          'judul_buku'    => $this->input->post('judul_buku'),
          'id_jenis_buku' => $this->input->post('jenis_buku'),
        ]
      );
      $this->Daftar_buku_model->save($data, $iddaftarbuku);
      redirect('setting/input_buku','Location');
    }
    $this->load->view('admin/setting/edit_buku', $data);
  }

  public function profile()
  {
    $this->data['link']               = 'admin/setting/profile/';
    $this->data['breadcrumb_header']  = 'Setting Profile Admin';
    $this->data['breadcrumb_title']   = 'Setting';
    $this->data['breadcrumb']         = 'Profile';

    if ($this->input->post('edit')) 
    {
      $id       = $this->session->userdata('id_user');
      $user     = $this->input->post('user_name');
      $cek_user = $this->User_model->get_by(['user_name'=>$user, 'id_user !='=>$id]);

      if (count($cek_user))
      {
        $this->session->set_flashdata('gagal', 'Maaf User Name yang anda masukkan sudah digunakan, <br> silahkan memasukkan User Name yang lain');
        redirect('admin/setting/profile','location');
      }
      else
      {
        $password = $this->input->post('pass');
        $pass     = $this->User_model->hash($password);

        $data = ([
          'nama_user'     => $this->input->post('nama_user'),
          'nomor_hp'      => $this->input->post('nomor_hp'),
          'user_name'     => $this->input->post('user_name'),
          'password'      => $pass,
          'backuppass'    => $password
        ]);
        $this->User_model->save($data, $id);
        redirect('login/logout','refresh');
      }
    }

    $this->load->view('admin/_setting/profile', $this->data, FALSE);
  }

  public function adduser($id = NULL)
  {
    $this->data['link']               = 'admin/setting/adduser/';
    $this->data['breadcrumb_header']  = 'Setting Tambah User';
    $this->data['breadcrumb_title']   = 'Setting';
    $this->data['breadcrumb']         = 'Tambah User';

    $this->data['listuser'] = $this->User_model->get_list_admin();
    $this->data['level']    = $this->Level_model->get();
    if ($id !== NULL) 
    {
      $this->data['user']     = $this->User_model->get_list_admin($id);
    }

    if ($this->input->post('simpan')) 
    {
      $user     = $this->input->post('user_name');
      $cek_user = $this->User_model->get_by(['user_name'=>$user]);

      if (count($cek_user))
      {
        $this->session->set_flashdata('gagal', 'Maaf User Name yang anda masukkan sudah digunakan, <br> silahkan memasukkan User Name yang lain');
        redirect('admin/setting/adduser','location');
      }
      else
      {
        $password = $this->input->post('password');
        $pass     = $this->User_model->hash($password);

        $data = ([
          'nama_user'     => $this->input->post('nama_user'),
          'nomor_hp'      => $this->input->post('no_hp'),
          'user_name'     => $this->input->post('user_name'),
          'id_level'      => $this->input->post('level'),
          'password'      => $pass,
          'backuppass'    => $password
        ]);
        $this->User_model->save($data);
        $this->session->set_flashdata('sukses', 'User Berhasil di Tambahkan');
        redirect('admin/setting/adduser','location');
      }
    }

    if ($this->input->post('edit')) 
    {
      $user     = $this->input->post('user_name');
      $cek_user = $this->User_model->get_by(['user_name'=>$user, 'id_user !='=>$id]);

      if (count($cek_user))
      {
        $this->session->set_flashdata('gagal', 'Maaf User Name yang anda masukkan sudah digunakan, <br> silahkan memasukkan User Name yang lain');
        redirect('admin/setting/adduser','location');
      }
      else
      {
        $password = $this->input->post('password');
        $pass     = $this->User_model->hash($password);

        $data = ([
          'nama_user'     => $this->input->post('nama_user'),
          'nomor_hp'      => $this->input->post('no_hp'),
          'user_name'     => $this->input->post('user_name'),
          'id_level'      => $this->input->post('level'),
          'password'      => $pass,
          'backuppass'    => $password
        ]);
        $this->User_model->save($data, $id);
        $this->session->set_flashdata('sukses', 'User Berhasil di Update');
        redirect('admin/setting/adduser','location');
      }
    }

    $this->load->view('admin/_setting/adduser', $this->data, FALSE);
  }
}

/* End of file Setting.php */
/* Location: .//C/xampp/htdocs/siget/_apps/controllers/admin/Setting.php */