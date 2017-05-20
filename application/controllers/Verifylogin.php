  <?php


class Verifylogin extends CI_Controller {
  function __construct(){
    parent:: __construct();
    $this->load->model('User_model');
  }

  function check_database($email, $password){ //untuk memasukkan session
    $result =  $this->User_model->login($email, $password); //dari controller login membawa parameter berisi value ke usermodel, membawa nilai dari result()
    if($result){
      $sess_array = array();
      foreach ($result as $r) {
        $sess_array = array(
          'id_user' => $r->id_user,
          'email' => $r->email,
          'password' => $r->password,
          'nama' => $r->nama
      );
      $this->session->set_userdata('logged_in', $sess_array);
      }
      return true;
    }else {
      return false;
    }
  }
  public function index()
	{
    $email = $this->input->post('email');
    $password =  $this->input->post('password');
    if($this->check_database($email, $password) == false ){ // $this->function(parameter)
      $this->load->view('login/login_view'); // view
    }else{
      redirect('home','refresh'); // redirect ke controller home
    }
	}

}
