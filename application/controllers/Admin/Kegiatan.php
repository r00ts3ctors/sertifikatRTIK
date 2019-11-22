<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('Kegiatan_model');
  }

  function index()
  {

		// listing untuk daftar kegiatan

		$data = array(
			'konten' => 'admin/list_kegiatan',
			'dataKegiatan' => $this->Kegiatan_model->get_all(),
		);
		$this->load->view('admin/index',$data);
  }

	public function detail($id)
	{
		$data = array(
			'konten' => 'admin/detail_kegiatan',
			'dataKegiatan' => $this->Kegiatan_model->get_by_id($id),
		);
		$this->load->view('admin/index',$data);

	}
	public function hapus($id)
	{
		$this->Kegiatan_model->delete($id);
		  $this->session->set_flashdata('msg', '<div class="alert alert-success">Kegiatan Sudah Di hapus</div>');
		redirect('Admin/kegiatan');
		// code...
	}

}
