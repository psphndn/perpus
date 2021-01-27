<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(['form']);
		$this->load->library(['form_validation', 'pagination', 'session']);
		$this->load->model(['Login_model']);

		$exception_uri = ['login/user', 'login/logout'];

		if(in_array($this->uri->uri_string(), $exception_uri) === FALSE)
		{
			if( $this->Login_model->cek_login() === FALSE )
			{
				redirect('login/user', 'location');
				exit;
			}
		}

	}

  /**
   * Format Bulan dalam Bahasa Indonesia
   * @param  [type] $month [description]
   * @return [type]        [description]
   */
  public function bulan($month)
  {
    switch ($month)
    {
      case '1': $bulan = 'JANUARI';
        break;
      case '2': $bulan = 'FEBRUARI';
        break;
      case '3': $bulan = 'MARET';
        break;
      case '4': $bulan = 'APRIL';
        break;
      case '5': $bulan = 'MEI';
        break;
      case '6': $bulan = 'JUNI';
        break;
      case '7': $bulan = 'JULI';
        break;
      case '8': $bulan = 'AGUSTUS';
        break;
      case '9': $bulan = 'SEPTEMBER';
        break;
      case '10': $bulan = 'OKTOBER';
        break;
      case '11': $bulan = 'NOVEMBER';
        break;
      case '12': $bulan = 'DESEMBER';
        break;
    }

    return $bulan;
  }  

}



/* End of file MY_Controller.php */