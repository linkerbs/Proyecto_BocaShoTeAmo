<?php
class Equipo_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('equipo');
        
    }
    
    public function get_equipos($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Nombre', $this->input->get("search"));
          
          $this->db->or_like('Logo', $this->input->get("search")); 
          
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get("equipo");
        return $query->result();
    }

    public function get_equiposc(){
        
        $query = $this->db->get("equipo");
        return $query->result();
    }
    public function insert_equipo($logo)
    {    
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            
            'Logo' =>   $logo
        );
        return $this->db->insert('equipo', $data);
    }
    public function update_equipo($Id,$Logo) 
    {
        $data=array(
            'Nombre' => $this->input->post('Nombre'),
            
            'Logo' =>   $Logo
        );
        if($Id==0){
            return $this->db->insert('equipo',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('equipo',$data);
        }        
    }

   
}


?>