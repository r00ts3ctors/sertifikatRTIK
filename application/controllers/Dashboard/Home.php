<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct() {
    parent::__construct();
    if (!$this->session->userdata('telepon')) { redirect('Auth/logout'); }

    $this->load->model(array('Member_model'));
  }

  function index()  {

    $user['user'] = $this->db->get_where('tbl_peserta', ['telepon' => $this->session->userdata['telepon']])->row_array();
    $data = array(
      'konten' => 'dashboard/konten',
      'datasertifkat' => $this->Member_model->listdatasertifikat($user['user']['idPeserta']),
      'userAkses' => $user['user']['namaPeserta'],
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
    // code...

    $member = $this->session->userdata['idPeserta'];

    $query = $this->Member_model->listdatasertifikat($member);

    echo "<pre>";
    print_r($query);
    echo "</pre>";

  }


  public function mySertifikat()
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
