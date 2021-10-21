<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrations extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->library('migration');
    if($this->migration->current() === FALSE)
    {
       show_error($this->migration->error_string());
    }
    else
    {
      echo 'Migration executed sucessfully';
    }
  }


}
