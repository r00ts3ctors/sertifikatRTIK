<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_kegiatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_kegiatan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_kegiatan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_kegiatan/index.html';
            $config['first_url'] = base_url() . 'tbl_kegiatan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_kegiatan_model->total_rows($q);
        $tbl_kegiatan = $this->Tbl_kegiatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_kegiatan_data' => $tbl_kegiatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_kegiatan/tbl_kegiatan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_kegiatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idKegiatan' => $row->idKegiatan,
		'nama' => $row->nama,
		'tema' => $row->tema,
		'tema1' => $row->tema1,
		'tema2' => $row->tema2,
		'tanggal' => $row->tanggal,
		'jam' => $row->jam,
		'wilayah' => $row->wilayah,
		'tempat' => $row->tempat,
		'status_kegiatan' => $row->status_kegiatan,
		'kapasistas_peserta' => $row->kapasistas_peserta,
		'alamat' => $row->alamat,
		'kontak' => $row->kontak,
		'poster' => $row->poster,
		'fb' => $row->fb,
		'tw' => $row->tw,
		'ig' => $row->ig,
	    );
            $this->load->view('tbl_kegiatan/tbl_kegiatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_kegiatan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_kegiatan/create_action'),
	    'idKegiatan' => set_value('idKegiatan'),
	    'nama' => set_value('nama'),
	    'tema' => set_value('tema'),
	    'tema1' => set_value('tema1'),
	    'tema2' => set_value('tema2'),
	    'tanggal' => set_value('tanggal'),
	    'jam' => set_value('jam'),
	    'wilayah' => set_value('wilayah'),
	    'tempat' => set_value('tempat'),
	    'status_kegiatan' => set_value('status_kegiatan'),
	    'kapasistas_peserta' => set_value('kapasistas_peserta'),
	    'alamat' => set_value('alamat'),
	    'kontak' => set_value('kontak'),
	    'poster' => set_value('poster'),
	    'fb' => set_value('fb'),
	    'tw' => set_value('tw'),
	    'ig' => set_value('ig'),
	);
        $this->load->view('tbl_kegiatan/tbl_kegiatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'tema' => $this->input->post('tema',TRUE),
		'tema1' => $this->input->post('tema1',TRUE),
		'tema2' => $this->input->post('tema2',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'wilayah' => $this->input->post('wilayah',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'status_kegiatan' => $this->input->post('status_kegiatan',TRUE),
		'kapasistas_peserta' => $this->input->post('kapasistas_peserta',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
		'poster' => $this->input->post('poster',TRUE),
		'fb' => $this->input->post('fb',TRUE),
		'tw' => $this->input->post('tw',TRUE),
		'ig' => $this->input->post('ig',TRUE),
	    );

            $this->Tbl_kegiatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_kegiatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_kegiatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_kegiatan/update_action'),
		'idKegiatan' => set_value('idKegiatan', $row->idKegiatan),
		'nama' => set_value('nama', $row->nama),
		'tema' => set_value('tema', $row->tema),
		'tema1' => set_value('tema1', $row->tema1),
		'tema2' => set_value('tema2', $row->tema2),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'jam' => set_value('jam', $row->jam),
		'wilayah' => set_value('wilayah', $row->wilayah),
		'tempat' => set_value('tempat', $row->tempat),
		'status_kegiatan' => set_value('status_kegiatan', $row->status_kegiatan),
		'kapasistas_peserta' => set_value('kapasistas_peserta', $row->kapasistas_peserta),
		'alamat' => set_value('alamat', $row->alamat),
		'kontak' => set_value('kontak', $row->kontak),
		'poster' => set_value('poster', $row->poster),
		'fb' => set_value('fb', $row->fb),
		'tw' => set_value('tw', $row->tw),
		'ig' => set_value('ig', $row->ig),
	    );
            $this->load->view('tbl_kegiatan/tbl_kegiatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_kegiatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idKegiatan', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'tema' => $this->input->post('tema',TRUE),
		'tema1' => $this->input->post('tema1',TRUE),
		'tema2' => $this->input->post('tema2',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'wilayah' => $this->input->post('wilayah',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'status_kegiatan' => $this->input->post('status_kegiatan',TRUE),
		'kapasistas_peserta' => $this->input->post('kapasistas_peserta',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
		'poster' => $this->input->post('poster',TRUE),
		'fb' => $this->input->post('fb',TRUE),
		'tw' => $this->input->post('tw',TRUE),
		'ig' => $this->input->post('ig',TRUE),
	    );

            $this->Tbl_kegiatan_model->update($this->input->post('idKegiatan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_kegiatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_kegiatan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_kegiatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_kegiatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_kegiatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tema', 'tema', 'trim|required');
	$this->form_validation->set_rules('tema1', 'tema1', 'trim|required');
	$this->form_validation->set_rules('tema2', 'tema2', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');
	$this->form_validation->set_rules('wilayah', 'wilayah', 'trim|required');
	$this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
	$this->form_validation->set_rules('status_kegiatan', 'status kegiatan', 'trim|required');
	$this->form_validation->set_rules('kapasistas_peserta', 'kapasistas peserta', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('kontak', 'kontak', 'trim|required');
	$this->form_validation->set_rules('poster', 'poster', 'trim|required');
	$this->form_validation->set_rules('fb', 'fb', 'trim|required');
	$this->form_validation->set_rules('tw', 'tw', 'trim|required');
	$this->form_validation->set_rules('ig', 'ig', 'trim|required');

	$this->form_validation->set_rules('idKegiatan', 'idKegiatan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_kegiatan.xls";
        $judul = "tbl_kegiatan";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Tema");
	xlsWriteLabel($tablehead, $kolomhead++, "Tema1");
	xlsWriteLabel($tablehead, $kolomhead++, "Tema2");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam");
	xlsWriteLabel($tablehead, $kolomhead++, "Wilayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Kegiatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kapasistas Peserta");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Kontak");
	xlsWriteLabel($tablehead, $kolomhead++, "Poster");
	xlsWriteLabel($tablehead, $kolomhead++, "Fb");
	xlsWriteLabel($tablehead, $kolomhead++, "Tw");
	xlsWriteLabel($tablehead, $kolomhead++, "Ig");

	foreach ($this->Tbl_kegiatan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tema);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tema1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tema2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam);
	    xlsWriteLabel($tablebody, $kolombody++, $data->wilayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status_kegiatan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kapasistas_peserta);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kontak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->poster);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fb);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ig);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Tbl_kegiatan.php */
/* Location: ./application/controllers/Tbl_kegiatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-01 21:17:52 */
/* http://harviacode.com */