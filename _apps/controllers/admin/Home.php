<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    
    $this->data['title']    = 'Home | SIGET';
    $this->load->model([]);
  }

  public function index()
  {
    $this->data['link']             = 'admin/home/';
    $this->data['breadcrumb_title'] = 'Admin / ';
    $this->data['breadcrumb']       = 'Dashboard';

    $this->load->view('admin/home', $this->data, FALSE);
  }

}

/* End of file Home.php */