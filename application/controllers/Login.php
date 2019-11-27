<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
  
  function auth(){
    $usuario    = $this->input->post('Usuario',TRUE);
    $contraseña = md5($this->input->post('Contraseña',TRUE));
    $validate = $this->login_model->validate($usuario,$contraseña);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $usuario  = $data['Usuario'];
        $id  = $data['Id'];
        $correo = $data['Correo'];
        $nivel = $data['Nivel'];
        $sesdata = array(
            'Id' => $id,
            'Usuario'  => $usuario,
            'Correo'     => $correo,
            'Nivel'     => $nivel,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($nivel === '4'){
            redirect('home/tienda');
 
        // access login for staff
        }elseif($nivel === '1'){
            redirect('dashboard');
 
        // access login for author
        }else{
            redirect('dashboard');
        }
    }else{
        echo $this->session->set_flashdata('msg','Usuario o contraseña incorrecta');
       redirect('home');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('home');
  }
 
}