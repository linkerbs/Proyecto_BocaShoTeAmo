<?php
class Afiliado_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('afiliado');
        
    }
    
    public function get_afiliados($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Nombre', $this->input->get("search"));
          $this->db->or_like('Logo', $this->input->get("search")); 
          
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get("afiliado");
        return $query->result();
    }
    public function insert_afiliado($logo)
    {    
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Logo' =>   $logo
        );
        return $this->db->insert('afiliado', $data);
    }
    public function update_afiliado($Id,$Logo) 
    {
        $data=array(
            'Nombre' => $this->input->post('Nombre'),
            'Logo' =>   $Logo
        );
        if($Id==0){
            return $this->db->insert('afiliado',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('afiliado',$data);
        }        
    }

   
}


?>