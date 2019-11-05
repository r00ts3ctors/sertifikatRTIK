<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sertifikat extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if (!$this->session->userdata('telepon')) { redirect('Auth/logout'); }
    $this->load->model(array('Member_model'));
    $this->load->helper(array('Sertifikat_helper'));
  }

  function index($id='') {
    $data = $this->Member_model->sertifikatby($id);
    if ($data) {
      foreach ($data as $key => $value) {
        $datasertifikat = array(
           'nama' => ucwords(strtolower($data[0]['namapeserta'])),
           'sebagai' => 'PESERTA ' . strtoupper($data[0]['katagori']),
           'tgl' => $data[0]['tanggalkegiatan'],
           'nomor' => $data[0]['nosertifikat'],
           'tema1' => $data[0]['tema'],
           'tema2' => $data[0]['tema1'],
           'tema3' => $data[0]['tema2'],
         );
       }
       cetak($datasertifikat);
     }
    else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"> Tindakan Tergolong Ilegal, Kami melakukan pencatatan data Anda. </div>');
      redirect('Dashboard/Home');
    }
  }

  public function cariDataSertifikat() {
    // untuk pelatihan
    $keyword = $this->input->post('kegiatan');
    $this->db->like('email', $keyword);
    $query = $this->db->query("SELECT * FROM tbl_kegiatan WHERE tema LIKE '%$keyword%' OR tema1 LIKE '%$keyword%' OR tema2 LIKE '%$keyword%' ")->result_array();
    //$query = $this->db->get('tbfeedback');

    $data = array(
      'konten' => 'dashboard/cari',
      'cari' => $query,
     );
     $this->load->view('dashboard/index', $data);

   }



}
