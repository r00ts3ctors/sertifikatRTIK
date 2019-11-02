<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Kegiatan_model');
    $this->load->library('form_validation');
  }

  function index()
  {

    $data = array(
      'konten' => 'dashboard/konten',
     );

    $this->load->view('dashboard/index',$data);


  }

  public function tambahKegiatan()
  {


    $data = array(
        'button' => 'Create',
        'konten' => 'kegiatan/kegiatan_form',
        'action' => site_url('kegiatan/create_action'),
  'idKegiatan' => set_value('idKegiatan'),
  'namaKegiatan' => set_value('namaKegiatan'),
  'temaKegiatan' => set_value('temaKegiatan'),
  'tanggalKegiatan' => set_value('tanggalKegiatan'),
  'tempatKegiatan' => set_value('tempatKegiatan'),
  'namaTandaTangan' => set_value('namaTandaTangan'),
  'jabatanTandaTangan' => set_value('jabatanTandaTangan'),
  'TandaTangan' => set_value('TandaTangan'),
  'Penyelenggara' => set_value('Penyelenggara'),
);
    $this->load->view('dashboard/index', $data);

  }

}
