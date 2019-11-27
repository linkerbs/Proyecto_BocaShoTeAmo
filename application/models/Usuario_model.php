<?php
class Usuario_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('usuario');
        
    }
    
    public function get_usuarios($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Nombres', $this->input->get("search"));
          $this->db->like('Correo', $this->input->get("search"));
          $this->db->like('Usuario', $this->input->get("search"));
          
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get("usuario");
        return $query->result();
    }


    public function get_usuariosc(){
        
        
        $query = $this->db->get("usuario");
        return $query->result();
    }


    public function insert_usuario()
    {    
        $contra = md5($this->input->post('Contraseña'));
        $data = array(
            'Nombres' => $this->input->post('Nombres'),
            'Correo' => $this->input->post('Correo'),
            'Usuario' => $this->input->post('Usuario'),
            'Contraseña' => $contra,
            'Nivel' => $this->input->post('Nivel')


        
        );
        return $this->db->insert('usuario', $data);
    }


    public function insert_usuario_c()
    {    
        $contra = md5($this->input->post('Contraseña'));
        $data = array(
            'Nombres' => $this->input->post('Nombres'),
            'Correo' => $this->input->post('Correo'),
            'Usuario' => $this->input->post('Usuario'),
            'Contraseña' => $contra,
            'Nivel' => "4"


        
        );
        return $this->db->insert('usuario', $data);
    }
    public function update_usuario($Id,$Logo) 
    {
        $contra = md5($this->input->post('Contraseña'));
        $data=array(
            
            'Nombres' => $this->input->post('Nombre'),
            'Correo' => $this->input->post('Correo'),
            'Usuario' => $this->input->post('Usuario'),
            'Contraseña' => $contra,
            'Nivel' => $this->input->post('Nivel')
        );
        if($Id==0){
            return $this->db->insert('Usuario',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('Usuario',$data);
        }        
    }

    public function update_clave($Id) 
    {

       
        $contra = md5($this->input->post('Contraseñan'));
        $data=array(
            'Contraseña' => $contra,
            'Nombres' => $this->input->post('Nombres')
        );
        if($Id==0){
            return $this->db->insert('usuario',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('usuario',$data);
        }        
    }

   
}


?>