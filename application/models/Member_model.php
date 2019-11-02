<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listdatasertifikat($id)
  {
    $this->db->select(
      '
      tbl_kegiatan.nama as namakegiatan ,
      tbl_kegiatan.tema ,
      tbl_kegiatan.tema1 ,
      tbl_kegiatan.tema2 ,
      tbl_kegiatan.tanggal as tanggalkegiatan ,
      tbl_kegiatan.wilayah as wilayahkegiatan ,
      tbl_kegiatan.tempat  as tempatkegiatan,
      tbl_peserta.namaPeserta  as namapeserta,
      tbl_peserta.email as emailpeserta ,
      tbl_peserta.telepon as tlppeserta,
      tbl_peserta.wilayah as wilayahpeserta,
      tbl_aktivaitas.noSertifikat as nosertifikat,
      tbl_aktivaitas.linkSertifkat as linksertifikat,

      ' );
    $this->db->from('tbl_aktivaitas');
    $this->db->join('tbl_peserta', 'tbl_peserta.idPeserta = tbl_aktivaitas.idPeserta', 'inner');
    $this->db->join('tbl_kegiatan', 'tbl_kegiatan.idKegiatan = tbl_aktivaitas.idKegiatan', 'inner');
    return   $query = $this->db->get()->result();
  }

  

}
