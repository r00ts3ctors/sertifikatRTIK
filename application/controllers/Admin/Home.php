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
      'datapeserta' => $this->db->get('tbl_peserta')->result_array(),
    );
    $this->load->view('admin/index',$data);
  }


  public function detailPeserta($id)
  {
    $databyID = $this->db->get_where('tbl_peserta',['idPeserta' => $id], 1)->result_array();
    $this->db->select('
      tbl_peserta.idPeserta  as idpeserta,
      tbl_peserta.namaPeserta  as namapeserta,
      tbl_peserta.email as emailpeserta ,
      tbl_peserta.telepon as tlppeserta,
      tbl_peserta.wilayah as wilayahpeserta,
      tbl_aktivaitas.noSertifikat as nosertifikat,
      tbl_aktivaitas.status as status,
      tbl_kegiatan.nama as namakegiatan,
      tbl_kegiatan.tanggal as tanggal,
      tbl_kegiatan.tema as tema,
      tbl_kegiatan.tema1 as tema1,
      tbl_kegiatan.tema2 as tema2,
      ' );
    $this->db->from('tbl_aktivaitas');
    $this->db->join('tbl_peserta', 'tbl_peserta.idPeserta = tbl_aktivaitas.idPeserta', 'inner');
    $this->db->join('tbl_kegiatan', 'tbl_kegiatan.idKegiatan = tbl_aktivaitas.idKegiatan', 'inner');
    $this->db->where('tbl_peserta.idPeserta =', $id);
    $hasil = $query = $this->db->get()->result_array();

    if ($databyID) {
      $data = array(
        'konten' => 'admin/detailPeserta',
        'detailPeserta' => $databyID,
        'detailPelatihan' => $hasil,
      );
      $this->load->view('admin/index',$data);
    }
    else {
      echo "gagal";
    }

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



  public function ganteng() {

    $this->form_validation->set_rules('namakegiatan', 'Nama Kegiatan', 'trim|required', ['required' => 'Wajib dan Jelas']);
    $this->form_validation->set_rules('tgl', 'Tanggal Kegiatan', 'trim|required',['required' => 'Wajib dan Jelas']);
    $this->form_validation->set_rules('tema', 'Tema Kegiattan', 'trim|required', ['required' => 'Wajib dan Jelas']);
    $this->form_validation->set_rules('tempat', 'Tempat', 'trim|required', ['required' => 'Tempat Kegiatan Wajib']);
    $this->form_validation->set_rules('wilayah', 'Wilayah', 'trim|required', ['required' => 'Wilayah Kegiatan Wajib']);
    $this->form_validation->set_rules('jam', 'Jam Kegiatan', 'trim|required', ['required' => 'Wajib ex 08:00 WIB']);
    $this->form_validation->set_rules('peserta', 'Peserta', 'trim|required', [
      'required' => 'Wajib ex 100'
    ]);
    $this->form_validation->set_rules('kontak', 'Kontak Panitia', 'trim|required', [
      'required' => 'Wajib'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat Kegiatan', 'trim|required',['required' => 'Wajib dan Lengkap']);


   if ($this->form_validation->run() == FALSE) {
     $data = array(
       'konten' => 'admin/form_addpelatihan',
       'pelatihanTersedia' => $this->operator->listingPelatihan(),
     );
     $this->load->view('admin/index',$data);
  }

  else {

    $data = array(
      'nama' => $this->input->post('namakegiatan', true),
      'katagori' => $this->input->post('katagori', true),
      'tema' => $this->input->post('tema', true) ,
      'tema1' => $this->input->post('tema1', true) ,
      'tema2' => $this->input->post('tema2', true) ,
      'tanggal' => $this->input->post('tgl', true),
      'jam' => $this->input->post('jam', true),
      'wilayah' => $this->input->post('wilayah', true) ,
      'tempat' => $this->input->post('tempat', true) ,
      'kapasistas_peserta' => $this->input->post('peserta', true),
      'status_kegiatan' => 1,
      'alamat' => $this->input->post('alamat', true),
      'kontak' => $this->input->post('kontak', true),
      'fb' => $this->input->post('fb', true),
      'tw' => $this->input->post('tw', true),
      'ig' => $this->input->post('ig', true) ,
      'tglinput' => time(),
    );
    //
    //
    $this->operator->addKegiatan($data);
    $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Berhasil di tambahkan.</div>');
    redirect('Admin/Home');

  }
}



  public function pelatihan($pelatihan)
  {

    $this->db->select('*');
    $this->db->from('tbl_aktivaitas');
    $this->db->join('tbl_peserta', 'tbl_peserta.idPeserta = tbl_aktivaitas.idPeserta');
    $this->db->where('tbl_aktivaitas.status = ', 1);
    $query = $this->db->get()->result_array();


    $data = array(
      'konten' => 'admin/form_absen',
      'uri' => $this->uri->segment(4,0),
      'pesarta' => $query,
    );
    // $this->session->set_flashdata('msg', '<div class="alert alert-warning">Peserta Sudah Berhasil Ditambahkan.</div>');
    $this->load->view('admin/index',$data);
    // redirect('admin');
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
