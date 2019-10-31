<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array(
      'konten' => 'dashboard/konten',
     );

    $this->load->view('dashboard/index',$data);


  }

}
