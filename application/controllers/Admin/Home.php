<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    // IDEA: jika bukan operator silahkan keluar
    if ($this->session->userdata('level') != 2) { redirect('Auth/logout'); }
    $this->load->model( array('Modeloperator' => 'operator', ));
      $this->load->library('form_validation');
  }



  function index(){
    $data = array(
      'konten' => 'admin/konten',
    );
    $this->load->view('admin/index',$data);
  }


  public function daftar(){
    $data = array(
      'konten' => 'admin/coba',
      'pelatihanTersedia' => $this->operator->listingPelatihan(),
    );
    $this->load->view('admin/index',$data);
  }

  public function addpelatihan()
  {
    $data = array(
      'konten' => 'admin/form_addpelatihan',
      'pelatihanTersedia' => $this->operator->listingPelatihan(),
    );
    $this->load->view('admin/index',$data);
  }


  public function prosesPelatihan() {
  $this->form_validation->set_rules('tema1', 'Tema Kegiattan', 'trim|required');
  $this->form_validation->set_rules('jam', 'Jam Kegiatan', 'trim|required');
  $this->form_validation->set_rules('tgl', 'Tanggal Kegiatan', 'trim|required');
  $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required|numeric');
  $this->form_validation->set_rules('kontak', 'Kontak Panitia', 'trim|required|numeric');
  $this->form_validation->set_rules('alamat', 'Alamat Kegiatan', 'trim|required');

   if ($this->form_validation->run() == FALSE) {
    redirect('Admin/Home');
  }
  else {

    echo "berhasil";
  }
}



  public function pelatihan($pelatihan)
  {

    $this->db->select('*');
    $this->db->from('tbl_aktivaitas');
    $this->db->join('tbl_peserta', 'tbl_peserta.idPeserta = tbl_aktivaitas.idPeserta');
    $this->db->where('tbl_aktivaitas.idKegiatan',$pelatihan);
    $this->db->where('tbl_aktivaitas.status = ', 1);
    $query = $this->db->get()->result_array();


    $data = array(
      'konten' => 'admin/form_absen',
      'uri' => $this->uri->segment(4,0),
      'pesarta' => $query,
    );
    $this->load->view('admin/index',$data);

    // $this->session->set_flashdata('msg', '<div class="alert alert-warning"> Selamat Datang Kembali <strong> '.$data['nama'].' </strong> Pastikan anda mengikuti semua pelatihan yang berkualitas di sini.</div>');
    // redirect('dashboard');
  }


  public function proses()
  {
    $id = $this->input->post('noregister', true);
    $dx = $this->db->get_where('tbl_aktivaitas', ['noSertifikat' => $id])->row_array();
    if ($dx['status'] == 0 && $dx['noSertifikat'] == $id) {
      echo "Proses Update Absensi";

      $this->operator->DaftarPeserta($id);
      $this->session->set_flashdata('msg', '<div class="alert alert-success"> Peserta Sudah Di daftarkan</div>');
      redirect('Admin/Home/daftar');

    }

    elseif ($dx['status'] == 1 && $dx['noSertifikat'] == $id) {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning"> Peserta Telah Terdaftar</div>');
      redirect('Admin/Home/daftar');
    }

    elseif ($dx['noSertifikat'] !== $id) {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"> No REGISTER SALAH</div>');
      redirect('Admin/Home/daftar');
    }


  }








}
