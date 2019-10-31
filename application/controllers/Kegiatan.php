<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kegiatan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kegiatan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kegiatan/index.html';
            $config['first_url'] = base_url() . 'kegiatan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kegiatan_model->total_rows($q);
        $kegiatan = $this->Kegiatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kegiatan_data' => $kegiatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kegiatan/kegiatan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kegiatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idKegiatan' => $row->idKegiatan,
		'namaKegiatan' => $row->namaKegiatan,
		'temaKegiatan' => $row->temaKegiatan,
		'tanggalKegiatan' => $row->tanggalKegiatan,
		'tempatKegiatan' => $row->tempatKegiatan,
		'namaTandaTangan' => $row->namaTandaTangan,
		'jabatanTandaTangan' => $row->jabatanTandaTangan,
		'TandaTangan' => $row->TandaTangan,
		'Penyelenggara' => $row->Penyelenggara,
	    );
            $this->load->view('kegiatan/kegiatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kegiatan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
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
        $this->load->view('kegiatan/kegiatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaKegiatan' => $this->input->post('namaKegiatan',TRUE),
		'temaKegiatan' => $this->input->post('temaKegiatan',TRUE),
		'tanggalKegiatan' => $this->input->post('tanggalKegiatan',TRUE),
		'tempatKegiatan' => $this->input->post('tempatKegiatan',TRUE),
		'namaTandaTangan' => $this->input->post('namaTandaTangan',TRUE),
		'jabatanTandaTangan' => $this->input->post('jabatanTandaTangan',TRUE),
		'TandaTangan' => $this->input->post('TandaTangan',TRUE),
		'Penyelenggara' => $this->input->post('Penyelenggara',TRUE),
	    );

            $this->Kegiatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kegiatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kegiatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kegiatan/update_action'),
		'idKegiatan' => set_value('idKegiatan', $row->idKegiatan),
		'namaKegiatan' => set_value('namaKegiatan', $row->namaKegiatan),
		'temaKegiatan' => set_value('temaKegiatan', $row->temaKegiatan),
		'tanggalKegiatan' => set_value('tanggalKegiatan', $row->tanggalKegiatan),
		'tempatKegiatan' => set_value('tempatKegiatan', $row->tempatKegiatan),
		'namaTandaTangan' => set_value('namaTandaTangan', $row->namaTandaTangan),
		'jabatanTandaTangan' => set_value('jabatanTandaTangan', $row->jabatanTandaTangan),
		'TandaTangan' => set_value('TandaTangan', $row->TandaTangan),
		'Penyelenggara' => set_value('Penyelenggara', $row->Penyelenggara),
	    );
            $this->load->view('kegiatan/kegiatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kegiatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idKegiatan', TRUE));
        } else {
            $data = array(
		'namaKegiatan' => $this->input->post('namaKegiatan',TRUE),
		'temaKegiatan' => $this->input->post('temaKegiatan',TRUE),
		'tanggalKegiatan' => $this->input->post('tanggalKegiatan',TRUE),
		'tempatKegiatan' => $this->input->post('tempatKegiatan',TRUE),
		'namaTandaTangan' => $this->input->post('namaTandaTangan',TRUE),
		'jabatanTandaTangan' => $this->input->post('jabatanTandaTangan',TRUE),
		'TandaTangan' => $this->input->post('TandaTangan',TRUE),
		'Penyelenggara' => $this->input->post('Penyelenggara',TRUE),
	    );

            $this->Kegiatan_model->update($this->input->post('idKegiatan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kegiatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kegiatan_model->get_by_id($id);

        if ($row) {
            $this->Kegiatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kegiatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kegiatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaKegiatan', 'namakegiatan', 'trim|required');
	$this->form_validation->set_rules('temaKegiatan', 'temakegiatan', 'trim|required');
	$this->form_validation->set_rules('tanggalKegiatan', 'tanggalkegiatan', 'trim|required');
	$this->form_validation->set_rules('tempatKegiatan', 'tempatkegiatan', 'trim|required');
	$this->form_validation->set_rules('namaTandaTangan', 'namatandatangan', 'trim|required');
	$this->form_validation->set_rules('jabatanTandaTangan', 'jabatantandatangan', 'trim|required');
	$this->form_validation->set_rules('TandaTangan', 'tandatangan', 'trim|required');
	$this->form_validation->set_rules('Penyelenggara', 'penyelenggara', 'trim|required');

	$this->form_validation->set_rules('idKegiatan', 'idKegiatan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-10-31 17:15:10 */
/* http://harviacode.com */