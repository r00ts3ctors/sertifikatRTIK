<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  //list sertifikat yang di ambil peserta
  public function listdatasertifikat($id)
  {
    $this->db->select('
      tbl_kegiatan.nama as namakegiatan ,
      tbl_kegiatan.tema ,
      tbl_kegiatan.tema1 ,
      tbl_kegiatan.tema2 ,
      tbl_kegiatan.katagori as katagori ,
      tbl_kegiatan.tanggal as tanggalkegiatan ,
      tbl_kegiatan.wilayah as wilayahkegiatan ,
      tbl_kegiatan.tempat  as tempatkegiatan,
      tbl_peserta.idPeserta  as idpeserta,
      tbl_peserta.namaPeserta  as namapeserta,
      tbl_peserta.email as emailpeserta ,
      tbl_peserta.telepon as tlppeserta,
      tbl_peserta.wilayah as wilayahpeserta,
      tbl_aktivaitas.noSertifikat as nosertifikat,
      tbl_aktivaitas.status as status,
      tbl_aktivaitas.linkSertifkat as linksertifikat,
      ' );
    $this->db->from('tbl_aktivaitas');
    $this->db->join('tbl_peserta', 'tbl_peserta.idPeserta = tbl_aktivaitas.idPeserta', 'inner');
    $this->db->join('tbl_kegiatan', 'tbl_kegiatan.idKegiatan = tbl_aktivaitas.idKegiatan', 'inner');
    return   $query = $this->db->get()->result();
    // return   $query = $this->db->get()->result();
  }


  public function sertifikatby($id) {
    // mendapatkan transkasi aktiviatas pada tbl_aktivitas member dimana setiap pengambilan materi akandi catata disiti
    $this->db->select(
      '
      tbl_kegiatan.nama as namakegiatan ,
      tbl_kegiatan.tema ,
      tbl_kegiatan.tema1 ,
      tbl_kegiatan.tema2 ,
      tbl_kegiatan.katagori as katagori,
      tbl_kegiatan.tanggal as tanggalkegiatan ,
      tbl_kegiatan.wilayah as wilayahkegiatan ,
      tbl_kegiatan.tempat  as tempatkegiatan,
      tbl_peserta.namaPeserta as namapeserta,
      tbl_peserta.idPeserta as idpeserta,
      tbl_peserta.email as emailpeserta ,
      tbl_peserta.telepon as tlppeserta,
      tbl_peserta.wilayah as wilayahpeserta,
      tbl_aktivaitas.noSertifikat as nosertifikat,
      tbl_aktivaitas.linkSertifkat as linksertifikat,

      ' );
    $this->db->from('tbl_aktivaitas');
    $this->db->join('tbl_peserta', 'tbl_peserta.idPeserta = tbl_aktivaitas.idPeserta', 'inner');
    $this->db->join('tbl_kegiatan', 'tbl_kegiatan.idKegiatan = tbl_aktivaitas.idKegiatan', 'inner');
    $this->db->where('tbl_aktivaitas.noSertifikat',$id);
    $query = $this->db->get()->result_array();
    return $query;
    // return   $query = $this->db->get()->result();
  }

  public function listKegaitan() // untuk kegiatan dengan status 1 dan kapasistas di atas 0
  {
    $this->db->where('status_kegiatan =', 1);
    $this->db->where('kapasistas_peserta >', 0); // Produces: WHERE name != 'Joe' AND id < 45
    return $this->db->get('tbl_kegiatan')->result_array();
  }

  function updateJumlahKapasitas($id,$sisa)
  {
      $data = array( 'kapasistas_peserta' => $sisa, );
      $this->db->where('idKegiatan', $id);
      $this->db->update('tbl_kegiatan', $data);
    }

    public function FunctionName($value='')
    {
      // code...
    }


}
