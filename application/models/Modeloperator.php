<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeloperator extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function tambahPelatihan($data)
  {
    $this->db->insert('tbl_kegiatan', $data);
    // code...
  }


  // IDEA: untuk menampilkan semua data pelatihan yang tersedia
  public function listingPelatihan(){
    // Listing pelatihan yang tersedia tbl_kegiatan
    $this->db->where('status_kegiatan =', 1);
    $this->db->where('kapasistas_peserta >', 0);
    return $this->db->get('tbl_kegiatan', 20)->result_array();
    // $q = $this->db->get('tbl_kegiatan', 20)->row_array()['nama'];
  }

  public function addKegiatan($data)
  {

    $this->db->insert('tbl_kegiatan', $data);

    // code...
  }

  public function DaftarPeserta($id)
  {
    $data = array( 'status' => 1 );
    $this->db->where('noSertifikat', $id);
  return   $this->db->update('tbl_aktivaitas', $data);
    // code...
  }


}
