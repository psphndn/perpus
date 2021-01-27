<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->data['title'] = 'Login | SIGET';
    $this->load->model(array('Level_model'));
  }

  public function user()
  {
    $welcome  = 'user/home';

    if($this->Login_model->cek_login() === TRUE)
    {
      if ($this->session->userdata('level') === '888') 
      {
        redirect('admin/home', 'location');
      }
      else 
      {
        redirect($welcome, 'location');
      }
    }

    $rules = $this->Login_model->rules;
    $this->form_validation->set_rules($rules);

    if($this->form_validation->run() === TRUE)
    {
      if($this->Login_model->login() === TRUE)
      {
        if ($this->session->userdata('level') === '888') 
        {
          redirect('admin/home', 'location');
        }
        else 
        {
          redirect($welcome, 'location');
        }
      }
      else
      {
        // var_dump($this->Login_model->login());
        $this->session->set_flashdata('info', 'User tidak ditemukan');
        redirect('login/user', 'location');
      } 
    }

    $this->load->view('login', $this->data);
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login/user', 'location');
  }

}

/* End of file Login.php */