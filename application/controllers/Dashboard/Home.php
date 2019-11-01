<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Kegiatan_model');
    $this->load->library('form_validation');
    $this->load->helper(array('Sertifikat_helper'));
  }

  function index()  {

    $data = array(
      'konten' => 'dashboard/konten',
     );
     $this->load->view('dashboard/index',$data);
  }


  // register kegiatan yang tersedia saat ini .
  public function register(){
    $data = array(
      'konten' => 'dashboard/register', // daftar atau ikut pelatihan yang di selenggarakan.
   );
    $this->load->view('dashboard/index',$data);

  }


  public function coba()
  {

    $datasertifikat = array(
      'nama' => ucfirst(strtolower('Maulana maulana')),
      'sebagai' => 'PESERTA 20 November 2019',
      'tgl' => '20 November 2019',
      'nomor' => '123ABC',
      'tema1' => 'WORKSHOP LITERSI DIGITAL EKONOMI UMKM ',
      'tema2' => 'DIMANA JALAN MERDEKA MAKAN DULU',
      'tema3' => 'MERDEKA MAKAN DULU',
     );
    cetak($datasertifikat);
  }

}
