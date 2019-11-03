<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    // IDEA: jika bukan operator silahkan keluar
    if ($this->session->userdata('level') != 2) { redirect('Auth/logout'); }


  }

  function index()
  {

    $data = array(
      'konten' => 'admin/konten',
     );

    $this->load->view('admin/index',$data);
  }





}
