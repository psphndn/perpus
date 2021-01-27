<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    
    $this->data['title']    = 'Arsip | SIGET';
    $this->load->model(['Digital_model', 'Dokumen_model', 'Daftar_buku_model', 'Penerbit_model', 'Jenis_buku_model', 'Jenis_digital_model', 'Jenis_dokumen_model']);
  }

  public function digital($id=NULL)
  {
    $this->data['link']               = 'admin/arsip/digital/';
    $this->data['breadcrumb_header']  = 'Arsip Digital';
    $this->data['breadcrumb_title']   = 'Arsip';
    $this->data['breadcrumb']         = 'Digital';

    $this->data['listdigital']       = $this->Digital_model->get();
    $this->data['digital']           = $this->Digital_model->get_by_one_join($id, 'penerbit', 'id_penerbit');
    $this->data['digital1']          = $this->Digital_model->get_by_one_join($id, 'jenis_digital', 'id_jenis_digital');
    $this->data['penerbit']          = $this->Penerbit_model->get();
    $this->data['jenis_digital']    = $this->Jenis_digital_model->get();


    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          //nama kolom            nama form
          'judul_digital'        => $this->input->post('judul_digital'),
          'tag_digital'          => $this->input->post('tag_digital'),
          'pengarang_digital'    => $this->input->post('pengarang_digital'),
          'sampul_digital'       => $this->input->post('sampul_digital'),
          'sinopsis_digital'     => $this->input->post('sinopsis_digital'),
          'file_digital'         => $this->input->post('file_digital'),
          'id_penerbit'       => $this->input->post('penerbit'),
          'level_digital'        => $this->input->post('level_digital')  
        ]
      );
      $file                        = 'file_digital';
      $nama_digital                = 'digital'.date('YmdHis');
      $nama_file                   =  $this->Digital_model->upload($file, $nama_digital);
      $data['file_digital']        =  $nama_file;

      $this->Digital_model->save($data);
      if ($nama_file === FALSE) 
      {
        $this->session->userdata('gagal', 'data sudah disimpan, upload gagal');
      }
      else
      {
        $this->session->userdata('sukses', 'data berhasil disimpan.');
      }
      redirect('admin/arsip/digital','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'judul_digital'     => $this->input->post('judul_digital'),
          'tag_digital'       => $this->input->post('tag_digital'),
          'pengarang_digital' => $this->input->post('pengarang_digital'),
          'sampul_digital'    => $this->input->post('sampul_digital'),
          'sinopsis_digital'  => $this->input->post('sinopsis_digital'),
          'file_digital'      => $this->input->post('file_digital'),
          'id_penerbit'       => $this->input->post('penerbit')
        ]
      );
      $this->Digital_model->save($data, $id);
      redirect('admin/arsip/digital','Location');
    }
   
    $this->load->view('admin/_arsip/digital', $this->data, FALSE);

  }

   public function dokumen($id=NULL)
  {
    $this->data['link']               = 'admin/arsip/dokumen/';
    $this->data['breadcrumb_header']  = 'Arsip Dokumen';
    $this->data['breadcrumb_title']   = 'Arsip';
    $this->data['breadcrumb']         = 'Dokumen';

    $this->data['listdokumen']      = $this->Dokumen_model->get();
    $this->data['dokumen']           = $this->Dokumen_model->get_by_one_join($id, 'penerbit', 'id_penerbit');
    $this->data['dokumen1']          = $this->Dokumen_model->get_by_one_join($id, 'jenis_dokumen', 'id_jenis_dokumen');
    $this->data['penerbit']          = $this->Penerbit_model->get();
    $this->data['jenis_dokumen']    = $this->Jenis_dokumen_model->get();
    
    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          //nama kolom            nama form
          'judul_dokumen'        => $this->input->post('judul_dokumen'),
          'tag_dokumen'          => $this->input->post('tag_dokumen'),
          'pengarang_dokumen'    => $this->input->post('pengarang_dokumen'),
          'sampul_dokumen'       => $this->input->post('sampul_dokumen'),
          'sinopsis_dokumen'     => $this->input->post('sinopsis_dokumen'),
          'file_dokumen'         => $this->input->post('file_dokumen'),
          'id_penerbit'          => $this->input->post('penerbit'),
          'level_dokumen'        => $this->input->post('level_dokumen')  
        ]
      );
      $file                        = 'file_dokumen';
      $nama_dokumen                ='dokumen'.date('YmdHis');
      $nama_file                   =  $this->Dokumen_model->upload($file, $nama_dokumen);
      $data['file_dokumen']        =  $nama_file;

      $this->Dokumen_model->save($data);
      if ($nama_file === FALSE) 
      {
        $this->session->userdata('gagal', 'data sudah disimpan, upload gagal');
      }
      else
      {
        $this->session->userdata('sukses', 'data berhasil disimpan.');
      }
      redirect('admin/arsip/dokumen','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'judul_dokumen'      => $this->input->post('judul_dokumen'),
          'tag_dokumen'        => $this->input->post('tag_dokumen'),
          'pengarang_dokumen'  => $this->input->post('pengarang_dokumen'),
          'sampul_dokumen'     => $this->input->post('sampul_dokumen'),
          'sinopsis_dokumen'   => $this->input->post('sinopsis_dokumen'),
          'file_dokumen'       => $this->input->post('file_dokumen'),
          'id_penerbit'        => $this->input->post('penerbit')
        ]
      );
      $this->Dokumen_model->save($data, $id);
      redirect('admin/arsip/dokumen','Location');
    }
   
    $this->load->view('admin/_arsip/dokumen', $this->data, FALSE);

  }

   public function buku($id=NULL)
  {
    $this->data['link']               = 'admin/arsip/buku/';
    $this->data['breadcrumb_header']  = 'Arsip Buku';
    $this->data['breadcrumb_title']   = 'Arsip';
    $this->data['breadcrumb']         = 'Buku';

    $this->data['listbuku']      = $this->Daftar_buku_model->get();
    $this->data['buku']          = $this->Daftar_buku_model->get_by_one_join($id, 'penerbit', 'id_penerbit');
    $this->data['buku1']          = $this->Daftar_buku_model->get_by_one_join($id, 'jenis_buku', 'id_jenis_buku');
    $this->data['penerbit']      = $this->Penerbit_model->get();
    $this->data['jenis_buku']    = $this->Jenis_buku_model->get();


    if ($this->input->post('simpan')) 
    {
      $data = (
        [
          //nama kolom            nama form
          'judul_buku'        => $this->input->post('judul_buku'),
          'tag_buku'          => $this->input->post('tag_buku'),
          'pengarang_buku'    => $this->input->post('pengarang_buku'),
          'sampul_buku'       => $this->input->post('sampul_buku'),
          'sinopsis_buku'     => $this->input->post('sinopsis_buku'),
          'file_buku'         => $this->input->post('file_buku'),
          'id_penerbit'       => $this->input->post('penerbit'),
          'id_jenis_buku'     => $this->input->post('jenis_buku'),
          'level_buku'        => $this->input->post('level_buku')  
        ]
      );
      $file                        = 'file_buku';
      $nama_buku                   = 'buku'.date('YmdHis');
      $nama_file                   =  $this->Daftar_buku_model->upload($file, $nama_buku);
      $data['file_buku']           =  $nama_file;

      $this->Daftar_buku_model->save($data);
      if ($nama_file === FALSE) 
      {
        $this->session->userdata('gagal', 'data sudah disimpan, upload gagal');
      }
      else
      {
        $this->session->userdata('sukses', 'data berhasil disimpan.');
      }
      redirect('admin/arsip/buku','Location');
    }

    if ($this->input->post('edit')) 
    {
      $data = (
        [
          'judul_buku'      => $this->input->post('judul_buku'),
          'tag_buku'        => $this->input->post('tag_buku'),
          'pengarang_buku'  => $this->input->post('pengarang_buku'),
          'sampul_buku'     => $this->input->post('sampul_buku'),
          'sinopsis_buku'   => $this->input->post('sinopsis_buku'),
          'file_buku'       => $this->input->post('file_buku'),
          'id_penerbit'     => $this->input->post('penerbit')
        ]
      );
      $this->Daftar_buku_model->save($data, $id);
      redirect('admin/arsip/buku','Location');
    }
   
    $this->load->view('admin/_arsip/buku', $this->data, FALSE);

  }
}


/* End of file Setting.php */
/* Location: .//C/xampp/htdocs/siget/_apps/controllers/admin/Setting.php */