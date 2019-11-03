<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		// $this->db->where('status_kegiatan =', 1);
    // $this->db->where('kapasistas_peserta >',   0);
    // $aktivitasStatus = $this->db->get('tbl_kegiatan')->result_array();
		//
		//

			$this->load->view('welcome_message');
		}

		public function validasi($id)
		{

			$input = strtoupper(preg_replace('#[^A-Za-z0-9\ ]+#', '', $id));
			$total = strlen($input);

			$this->db->select('idPeserta,idKegiatan');
			$this->db->where('noSertifikat = ',  $input);
			$this->db->where('status = ',  1);
			$validasi = $this->db->get('tbl_aktivaitas', 1)->row_array();
			if ($total == 6) {
				if ($validasi != NULL) {
					$peserta = $this->db->get_where('tbl_peserta', ['idPeserta' => $validasi['idPeserta']])->result_array();
					// var_dump($peserta);
					$namapeserta =  $peserta[0]['namaPeserta'];

					$kegiatan = $this->db->get_where('tbl_kegiatan', ['idKegiatan' => $validasi['idKegiatan']])->result_array();
					$data = array(
						'pesan' => 'halo',
						'nosertifikat' => $input,
						'peserta' => $namapeserta,
						'kegiatan' => $kegiatan,
					 );
					 $this->load->view('check', $data);
				}
				else {
					$data = array(
						'nosertifikat' => $input, );
					 $this->load->view('gagal',$data);
				}

			}
			else {

			 $this->load->view('gagal');
			}


			// echo $this->input->post('sertifikat', true);

			// code...
		}

		public function validasipost()
		{
			// echo "string";
			$id = $this->input->post('sertifikat', true);
			$input = strtoupper(preg_replace('#[^A-Za-z0-9\ ]+#', '', $id));
			$total = strlen($input);

			$this->db->select('idPeserta,idKegiatan');
			$this->db->where('noSertifikat = ',  $input);
			$this->db->where('status = ',  1);
			$validasi = $this->db->get('tbl_aktivaitas', 1)->row_array();
			if ($total == 6) {
				if ($validasi != NULL) {
					$peserta = $this->db->get_where('tbl_peserta', ['idPeserta' => $validasi['idPeserta']])->result_array();
					// var_dump($peserta);
					$namapeserta =  $peserta[0]['namaPeserta'];

					$kegiatan = $this->db->get_where('tbl_kegiatan', ['idKegiatan' => $validasi['idKegiatan']])->result_array();
					$data = array(
						'pesan' => 'halo',
						'nosertifikat' => $input,
						'peserta' => $namapeserta,
						'kegiatan' => $kegiatan,
					 );
					 $this->load->view('check', $data);
				}
				else {
					$data = array(
						'nosertifikat' => $input, );
					 $this->load->view('gagal',$data);
				}

			}
			else {

			 $this->load->view('gagal');
			}
			

		}


	}
