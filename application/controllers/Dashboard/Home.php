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
    $data = array('konten' => 'dashboard/konten', );
    $this->load->view('dashboard/index',$data);

  }

  // register kegiatan yang tersedia saat ini .
  public function register(){
    $data = array(
      'konten' => 'dashboard/register', // daftar atau ikut pelatihan yang di selenggarakan.
   );
    $this->load->view('dashboard/index',$data);

  }


}
