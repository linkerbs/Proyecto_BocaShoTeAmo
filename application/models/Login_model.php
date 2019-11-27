<?php
class Login_model extends CI_Model{
 
  function validate($usuario,$contraseña){
    $this->db->where('Usuario',$usuario);
    $this->db->where('Contraseña',$contraseña);
    $result = $this->db->get('usuario',1);
    return $result;
  }
 
}