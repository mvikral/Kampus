<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('main_model');
  }
  public function index(){
    $this->load->view('login'); // Load view login.php
  }
  public function login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->main_model->get($username); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
      redirect('main'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'username'=>$user->username,  // Buat session username
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('mahasiswa/index'); // Redirect ke halaman welcome
      }else{
        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
        redirect('main'); // Redirect ke halaman login
      }
    }
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('main'); // Redirect ke halaman login
  }
}