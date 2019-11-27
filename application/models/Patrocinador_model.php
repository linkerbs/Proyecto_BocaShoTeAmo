<?php
class Patrocinador_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('patrocinador');
        
    }
    
    public function get_patrocinadores($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Nombre', $this->input->get("search"));
          $this->db->or_like('Logo', $this->input->get("search")); 
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get("patrocinador");
        return $query->result();
    }


    public function get_patrocinadoresc(){
        
        
        $query = $this->db->get("patrocinador");
        return $query->result();
    }
    public function insert_patrocinador($logo)
    {    
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Logo' =>   $logo
        );
        return $this->db->insert('patrocinador', $data);
    }
    public function update_patrocinador($Id,$Logo) 
    {
        $data=array(
            'Nombre' => $this->input->post('Nombre'),
            'Logo'=> $Logo
        );
        if($Id==0){
            return $this->db->insert('patrocinador',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('patrocinador',$data);
        }        
    }

   
}


?>