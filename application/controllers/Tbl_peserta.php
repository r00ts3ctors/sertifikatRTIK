<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_peserta_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_peserta/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_peserta/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_peserta/index.html';
            $config['first_url'] = base_url() . 'tbl_peserta/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_peserta_model->total_rows($q);
        $tbl_peserta = $this->Tbl_peserta_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_peserta_data' => $tbl_peserta,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_peserta/tbl_peserta_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_peserta_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idPeserta' => $row->idPeserta,
		'namaPeserta' => $row->namaPeserta,
		'email' => $row->email,
		'telepon' => $row->telepon,
		'wilayah' => $row->wilayah,
		'fb' => $row->fb,
		'tw' => $row->tw,
		'ig' => $row->ig,
		'tgldaftar' => $row->tgldaftar,
		'foto' => $row->foto,
		'password' => $row->password,
		'level' => $row->level,
	    );
            $this->load->view('tbl_peserta/tbl_peserta_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_peserta'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_peserta/create_action'),
	    'idPeserta' => set_value('idPeserta'),
	    'namaPeserta' => set_value('namaPeserta'),
	    'email' => set_value('email'),
	    'telepon' => set_value('telepon'),
	    'wilayah' => set_value('wilayah'),
	    'fb' => set_value('fb'),
	    'tw' => set_value('tw'),
	    'ig' => set_value('ig'),
	    'tgldaftar' => set_value('tgldaftar'),
	    'foto' => set_value('foto'),
	    'password' => set_value('password'),
	    'level' => set_value('level'),
	);
        $this->load->view('tbl_peserta/tbl_peserta_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaPeserta' => $this->input->post('namaPeserta',TRUE),
		'email' => $this->input->post('email',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'wilayah' => $this->input->post('wilayah',TRUE),
		'fb' => $this->input->post('fb',TRUE),
		'tw' => $this->input->post('tw',TRUE),
		'ig' => $this->input->post('ig',TRUE),
		'tgldaftar' => $this->input->post('tgldaftar',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
	    );

            $this->Tbl_peserta_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_peserta'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_peserta_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_peserta/update_action'),
		'idPeserta' => set_value('idPeserta', $row->idPeserta),
		'namaPeserta' => set_value('namaPeserta', $row->namaPeserta),
		'email' => set_value('email', $row->email),
		'telepon' => set_value('telepon', $row->telepon),
		'wilayah' => set_value('wilayah', $row->wilayah),
		'fb' => set_value('fb', $row->fb),
		'tw' => set_value('tw', $row->tw),
		'ig' => set_value('ig', $row->ig),
		'tgldaftar' => set_value('tgldaftar', $row->tgldaftar),
		'foto' => set_value('foto', $row->foto),
		'password' => set_value('password', $row->password),
		'level' => set_value('level', $row->level),
	    );
            $this->load->view('tbl_peserta/tbl_peserta_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_peserta'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idPeserta', TRUE));
        } else {
            $data = array(
		'namaPeserta' => $this->input->post('namaPeserta',TRUE),
		'email' => $this->input->post('email',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'wilayah' => $this->input->post('wilayah',TRUE),
		'fb' => $this->input->post('fb',TRUE),
		'tw' => $this->input->post('tw',TRUE),
		'ig' => $this->input->post('ig',TRUE),
		'tgldaftar' => $this->input->post('tgldaftar',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
	    );

            $this->Tbl_peserta_model->update($this->input->post('idPeserta', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_peserta'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_peserta_model->get_by_id($id);

        if ($row) {
            $this->Tbl_peserta_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_peserta'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_peserta'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaPeserta', 'namapeserta', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('wilayah', 'wilayah', 'trim|required');
	$this->form_validation->set_rules('fb', 'fb', 'trim|required');
	$this->form_validation->set_rules('tw', 'tw', 'trim|required');
	$this->form_validation->set_rules('ig', 'ig', 'trim|required');
	$this->form_validation->set_rules('tgldaftar', 'tgldaftar', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');

	$this->form_validation->set_rules('idPeserta', 'idPeserta', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_peserta.xls";
        $judul = "tbl_peserta";
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
	xlsWriteLabel($tablehead, $kolomhead++, "NamaPeserta");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Telepon");
	xlsWriteLabel($tablehead, $kolomhead++, "Wilayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Fb");
	xlsWriteLabel($tablehead, $kolomhead++, "Tw");
	xlsWriteLabel($tablehead, $kolomhead++, "Ig");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgldaftar");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Level");

	foreach ($this->Tbl_peserta_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namaPeserta);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->telepon);
	    xlsWriteLabel($tablebody, $kolombody++, $data->wilayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fb);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ig);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tgldaftar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteNumber($tablebody, $kolombody++, $data->level);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Tbl_peserta.php */
/* Location: ./application/controllers/Tbl_peserta.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-02 19:04:09 */
/* http://harviacode.com */