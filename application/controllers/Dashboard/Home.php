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
      'kegiatan' => $this->Member_model->listKegaitan(),
   );

    $this->load->view('dashboard/index',$data);

  }

  public function takePelatihan($id)
  {
    // random_string('alnum',5);
    $this->load->helper('string');
    $peserta = $this->db->get_where('tbl_peserta', ['idPeserta' => $this->session->userdata('idPeserta')])->row_array();
    $kegiatan = $this->db->get_where('tbl_kegiatan', ['idKegiatan' => $id])->row_array();

    $sisa = $kegiatan['kapasistas_peserta'] - 1;

    $this->db->where('idKegiatan =', $id);
    $this->db->where('idPeserta =',   $peserta['idPeserta']);
    $aktivitasStatus = $this->db->get('tbl_aktivaitas')->num_rows();


    if ($aktivitasStatus == 0) {
      $dataAktivitas = array(
        'idKegiatan' => $id,
        'idPeserta' => $peserta['idPeserta'],
        'noSertifikat' => strtoupper(random_string('alnum',6)),
        'status' => 0,
      );
      $this->db->insert('tbl_aktivaitas', $dataAktivitas);
      $this->Member_model->updateJumlahKapasitas($id,$sisa);
      $this->session->set_flashdata('msg', '<div class="alert alert-success">Selamat Pendaftaran Kegiatan Berhasil.</div>');
      redirect('register');
    }
    else {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning">Gagal, Anda Telah mendaftar Sebelumnya.</div>');
      redirect('register');
    }

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

  public function listSertifikat() {
    $user['user'] = $this->db->get_where('tbl_peserta', ['telepon' => $this->session->userdata['telepon']])->row_array();
    $data = array(
      'konten' => 'dashboard/list_pelatihan',
      'datasertifkat' => $this->Member_model->listdatasertifikat($user['user']['idPeserta']),
    );
    $this->load->view('dashboard/index', $data);
  }



}
