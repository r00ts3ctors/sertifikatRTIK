<?php
header('Content-type: image/png');
defined('BASEPATH') OR exit('No direct script access allowed');
class Sertifikat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Member_model'));
    $this->load->helper(array('Sertifikat_helper'));
  }

  function index() {

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
