<?php
class Jugador_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('jugador');
        
    }

    

    public function get_jugadoresequi($id){
        
       
       
        $this->db->select('*');
        $this->db->from('jugador');
        $this->db->where('Id_equipo', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_jugadores($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Nombre', $this->input->get("search"));
          $this->db->like('Tag', $this->input->get("search"));
          $this->db->or_like('Logo', $this->input->get("search")); 
          $this->db->like('Id_equipo', $this->input->get("search"));
          
        }
        $this->db->limit($limit, $start);
        $this->db->select('jugador.Id,jugador.Nombre,jugador.Tag,jugador.Logo,equipo.Nombre as Equipo');
        $this->db->from('jugador');
        $this->db->join('equipo', 'equipo.Id = jugador.Id_equipo');
        $query = $this->db->get();
        return $query->result();
    }
    public function insert_jugador($logo)
    {    
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Tag' => $this->input->post('Tag'),
            'Id_equipo' => $this->input->post('Id_equipo'),
            
            'Logo' =>   $logo
        );
        return $this->db->insert('jugador', $data);
    }
    public function update_jugador($Id,$Logo) 
    {
        $data=array(
            'Nombre' => $this->input->post('Nombre'),
            'Tag' => $this->input->post('Tag'),
            'Id_equipo' => $this->input->post('Id_equipo'),
            
            'Logo' =>   $Logo
        );
        if($Id==0){
            return $this->db->insert('jugador',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('jugador',$data);
        }        
    }

   
}


?>