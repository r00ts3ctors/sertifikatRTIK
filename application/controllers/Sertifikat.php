<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index($id)
  {

    $sertifikat = $this->db->get_where('register',['id'=> $id, 'status'=>1])->result_array();
    if ($sertifikat) {
      echo "hallo";
    }
    else {
      echo "gagal";
    }
    echo "<br />";
    print_r($sertifikat);



    // $this->load->helper(array('Sertifikat_helper'));
    // $datasertifikat = array(
    //   'nama' => ucfirst(strtolower('Maulana maulana')),
    //   'sebagai' => 'PESERTA 20 November 2019',
    //   'tgl' => '20 November 2019',
    //   'nomor' => '123ABC',
    //   'tema1' => 'WORKSHOP LITERSI DIGITAL EKONOMI UMKM ',
    //   'tema2' => 'DIMANA JALAN MERDEKA MAKAN DULU',
    //   'tema3' => 'MERDEKA MAKAN DULU',
    //  );
    // cetak($datasertifikat);
  }

}
