<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_aktivaitas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_aktivaitas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_aktivaitas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_aktivaitas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_aktivaitas/index.html';
            $config['first_url'] = base_url() . 'tbl_aktivaitas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_aktivaitas_model->total_rows($q);
        $tbl_aktivaitas = $this->Tbl_aktivaitas_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_aktivaitas_data' => $tbl_aktivaitas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_aktivaitas/tbl_aktivaitas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_aktivaitas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idAktivitas' => $row->idAktivitas,
		'idKegiatan' => $row->idKegiatan,
		'idPeserta' => $row->idPeserta,
		'noSertifikat' => $row->noSertifikat,
		'status' => $row->status,
		'linkSertifkat' => $row->linkSertifkat,
	    );
            $this->load->view('tbl_aktivaitas/tbl_aktivaitas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_aktivaitas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_aktivaitas/create_action'),
	    'idAktivitas' => set_value('idAktivitas'),
	    'idKegiatan' => set_value('idKegiatan'),
	    'idPeserta' => set_value('idPeserta'),
	    'noSertifikat' => set_value('noSertifikat'),
	    'status' => set_value('status'),
	    'linkSertifkat' => set_value('linkSertifkat'),
	);
        $this->load->view('tbl_aktivaitas/tbl_aktivaitas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idKegiatan' => $this->input->post('idKegiatan',TRUE),
		'idPeserta' => $this->input->post('idPeserta',TRUE),
		'noSertifikat' => $this->input->post('noSertifikat',TRUE),
		'status' => $this->input->post('status',TRUE),
		'linkSertifkat' => $this->input->post('linkSertifkat',TRUE),
	    );

            $this->Tbl_aktivaitas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_aktivaitas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_aktivaitas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_aktivaitas/update_action'),
		'idAktivitas' => set_value('idAktivitas', $row->idAktivitas),
		'idKegiatan' => set_value('idKegiatan', $row->idKegiatan),
		'idPeserta' => set_value('idPeserta', $row->idPeserta),
		'noSertifikat' => set_value('noSertifikat', $row->noSertifikat),
		'status' => set_value('status', $row->status),
		'linkSertifkat' => set_value('linkSertifkat', $row->linkSertifkat),
	    );
            $this->load->view('tbl_aktivaitas/tbl_aktivaitas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_aktivaitas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idAktivitas', TRUE));
        } else {
            $data = array(
		'idKegiatan' => $this->input->post('idKegiatan',TRUE),
		'idPeserta' => $this->input->post('idPeserta',TRUE),
		'noSertifikat' => $this->input->post('noSertifikat',TRUE),
		'status' => $this->input->post('status',TRUE),
		'linkSertifkat' => $this->input->post('linkSertifkat',TRUE),
	    );

            $this->Tbl_aktivaitas_model->update($this->input->post('idAktivitas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_aktivaitas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_aktivaitas_model->get_by_id($id);

        if ($row) {
            $this->Tbl_aktivaitas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_aktivaitas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_aktivaitas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idKegiatan', 'idkegiatan', 'trim|required');
	$this->form_validation->set_rules('idPeserta', 'idpeserta', 'trim|required');
	$this->form_validation->set_rules('noSertifikat', 'nosertifikat', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('linkSertifkat', 'linksertifkat', 'trim|required');

	$this->form_validation->set_rules('idAktivitas', 'idAktivitas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_aktivaitas.xls";
        $judul = "tbl_aktivaitas";
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
	xlsWriteLabel($tablehead, $kolomhead++, "IdKegiatan");
	xlsWriteLabel($tablehead, $kolomhead++, "IdPeserta");
	xlsWriteLabel($tablehead, $kolomhead++, "NoSertifikat");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "LinkSertifkat");

	foreach ($this->Tbl_aktivaitas_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idKegiatan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idPeserta);
	    xlsWriteLabel($tablebody, $kolombody++, $data->noSertifikat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->linkSertifkat);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Tbl_aktivaitas.php */
/* Location: ./application/controllers/Tbl_aktivaitas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-01 21:17:52 */
/* http://harviacode.com */