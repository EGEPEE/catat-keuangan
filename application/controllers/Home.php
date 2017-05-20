<?php

class Home extends CI_Controller {
  function __construct(){
    parent:: __construct();
  }

	public function index()
	{
		if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
      $data['email'] = $session_data['email'];
      $data['id_user'] = $session_data['id_user'];
      $data['nama'] = $session_data['nama'];
      $data['password'] = $session_data['password'];
      $this->load->view('home_main',$data);
    }else{
      redirect('login','refresh');
    }
	}

  function logout(){
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home','refresh');
  }
}
