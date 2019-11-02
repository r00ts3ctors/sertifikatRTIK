<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
  }

  function index(){
    $this->load->view('auth/login');
  }

  public function login() {

    $this->form_validation->set_rules('tlp', 'No. Telepon', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('auth/login');

    }

    else {
      $this->_login();

    }

  }

  private function _login(){
    $notelepon = $this->input->post('tlp', true);
    $password = $this->input->post('password', true);

    $user = $this->db->get_where('tbl_peserta', ['telepon' => $notelepon])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = array(
          'idPeserta' => $user['idPeserta'] ,
          'nama' => $user['namaPeserta'] ,
          'email' => $user['email'] ,
          'telepon' => $user['telepon'] ,
          'wilayah' => $user['wilayah'] ,
          'facebook' => $user['fb'] ,
          'twitter' => $user['tw'] ,
          'instagram' => $user['ig'] ,
          'instagram' => $user['ig'] ,
          'level' => $user['level'] ,
        );

        var_dump($data);
        $this->session->set_userdata($data);
        $this->session->set_flashdata('msg', '<div class="alert alert-warning"> Selamat Datang Kembali <strong> '.$data['nama'].' </strong> Pastikan anda mengikuti semua pelatihan yang berkualitas di sini.</div>');
        redirect('Dashboard/Home');

      }
      else {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger"> Password Tidak Salah </div>');
        redirect('Auth');
      }
    }
    else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"> No Telepon Tidak Salah </div>');
      redirect('Auth');
    }

  }


  public function register ()
  {
    $this->load->view('auth/register');
  }

  public function registrasi()
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
    $this->form_validation->set_rules('tlp', 'No. Telepon', 'trim|required');
    $this->form_validation->set_rules('email', 'No. Telepon', 'trim|required|valid_email');
    $this->form_validation->set_rules('kota', 'Kota Asal', 'trim|required');
    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|max_length[8]|matches[password2]', [
      'matches' => 'Pass Tidak Sama',
      'min_length' => 'Pass Terlalu Pendek',
    ]);

    $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');
    if ($this->form_validation->run() == false) {
      $this->load->view('auth/register');
    }

    else {
      $dataRegister = array(
        'namaPeserta' => ucfirst(strtolower($this->input->post('nama', true))),
        'email' => $this->input->post('email', true),
        'telepon' => $this->input->post('tlp', true),
        'wilayah' => ucfirst(strtolower($this->input->post('kota', true))),
        'tgldaftar' => time(),
        'foto' => 'default.jpg',
        'level' => 1,
        'password' => PASSWORD_HASH($this->input->post('password1'), PASSWORD_DEFAULT),
      );
      $this->db->insert('tbl_peserta', $dataRegister);
      $this->session->set_flashdata('msg', '<div class="alert alert-success"> Selamat anda Terdaftar silahkan login </div>');
      redirect('Auth');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Auth/index');
    // code...
  }


}
