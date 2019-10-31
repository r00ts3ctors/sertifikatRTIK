<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'register/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'register/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'register/index.html';
            $config['first_url'] = base_url() . 'register/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Register_model->total_rows($q);
        $register = $this->Register_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'register_data' => $register,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('register/register_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Register_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'noreg' => $row->noreg,
		'idkegiatan' => $row->idkegiatan,
		'nama' => $row->nama,
		'email' => $row->email,
		'telepon' => $row->telepon,
		'status' => $row->status,
		'linkSertifikat' => $row->linkSertifikat,
		'linkBarcode' => $row->linkBarcode,
		'tglRegister' => $row->tglRegister,
	    );
            $this->load->view('register/register_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('register/create_action'),
	    'id' => set_value('id'),
	    'noreg' => set_value('noreg'),
	    'idkegiatan' => set_value('idkegiatan'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	    'telepon' => set_value('telepon'),
	    'status' => set_value('status'),
	    'linkSertifikat' => set_value('linkSertifikat'),
	    'linkBarcode' => set_value('linkBarcode'),
	    'tglRegister' => set_value('tglRegister'),
	);
        $this->load->view('register/register_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'noreg' => $this->input->post('noreg',TRUE),
		'idkegiatan' => $this->input->post('idkegiatan',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'status' => $this->input->post('status',TRUE),
		'linkSertifikat' => $this->input->post('linkSertifikat',TRUE),
		'linkBarcode' => $this->input->post('linkBarcode',TRUE),
		'tglRegister' => $this->input->post('tglRegister',TRUE),
	    );

            $this->Register_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('register'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Register_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('register/update_action'),
		'id' => set_value('id', $row->id),
		'noreg' => set_value('noreg', $row->noreg),
		'idkegiatan' => set_value('idkegiatan', $row->idkegiatan),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
		'telepon' => set_value('telepon', $row->telepon),
		'status' => set_value('status', $row->status),
		'linkSertifikat' => set_value('linkSertifikat', $row->linkSertifikat),
		'linkBarcode' => set_value('linkBarcode', $row->linkBarcode),
		'tglRegister' => set_value('tglRegister', $row->tglRegister),
	    );
            $this->load->view('register/register_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'noreg' => $this->input->post('noreg',TRUE),
		'idkegiatan' => $this->input->post('idkegiatan',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'status' => $this->input->post('status',TRUE),
		'linkSertifikat' => $this->input->post('linkSertifikat',TRUE),
		'linkBarcode' => $this->input->post('linkBarcode',TRUE),
		'tglRegister' => $this->input->post('tglRegister',TRUE),
	    );

            $this->Register_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('register'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Register_model->get_by_id($id);

        if ($row) {
            $this->Register_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('register'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('noreg', 'noreg', 'trim|required');
	$this->form_validation->set_rules('idkegiatan', 'idkegiatan', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('linkSertifikat', 'linksertifikat', 'trim|required');
	$this->form_validation->set_rules('linkBarcode', 'linkbarcode', 'trim|required');
	$this->form_validation->set_rules('tglRegister', 'tglregister', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-10-31 17:15:10 */
/* http://harviacode.com */