<?php
class Noticia_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('noticia');
        
    }
    
    public function get_noticias($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Titulo', $this->input->get("search"));
          $this->db->like('Subtitulo', $this->input->get("search"));
          
          $this->db->like('Fecha', $this->input->get("search"));
          $this->db->like('Slider', $this->input->get("search"));
          $this->db->or_like('Logo', $this->input->get("search")); 
          
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get("noticia");
        return $query->result();
    }


    public function get_noticiasc(){
       
        $query = $this->db->get("noticia");
        return $query->result();
    }


    public function insert_noticia($logo)
    {    
        $data = array(
            'Titulo' => $this->input->post('Titulo'),
            'Subtitulo' => $this->input->post('Subtitulo'),
            
            'Fecha' => $this->input->post('Fecha'),
            'Slider' => $this->input->post('Slider'),
            'Logo' =>   $logo
        );
        return $this->db->insert('noticia', $data);
    }
    public function update_noticia($Id,$logo) 
    {
        $data=array(
            'Titulo' => $this->input->post('Titulo'),
            'Subtitulo' => $this->input->post('Subtitulo'),
            
            'Fecha' => $this->input->post('Fecha'),
            'Slider' => $this->input->post('Slider'),
            'Logo' =>   $logo
        );
        if($Id==0){
            return $this->db->insert('noticia',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('noticia',$data);
        }        
    }

   
}


?>