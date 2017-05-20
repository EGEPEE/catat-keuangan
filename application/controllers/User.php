<?php
  /**
   *
   */
  class User extends CI_Controller
  {

    function __construct()
    {
      parent:: __construct();
      $this->load->model('user_model');
    }

    function index(){
      $data['user'] = $this->user_model->user_view_all()->result();
      $this->load->view('user/User_list', $data);
    }

    function tambah(){
      $this->load->view('user/User_tambah');
    }

    function tambah_aksi(){
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $data = array('nama'=>$nama, 'email'=>$email, 'password' => $password);

      if ($nama == "" || ($email == "" || $password == "")){
        redirect('user/tambah');
      }else{
      $this->user_model->tambah_data($data,'user');
        redirect('user/index');
      }
    }
  }


 ?>
