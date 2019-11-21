<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index(){
    $this->load->view('public/index');
  }
 
  function auth(){
    $email    = $this->input->post('Correo',TRUE);
    $usuario    = $this->input->post('Usuario',TRUE);
    $password = md5($this->input->post('Const',TRUE));
    $validate = $this->login_model->validate($email,$password,$usuario);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
            redirect('public/login');
 
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('public/index');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}
