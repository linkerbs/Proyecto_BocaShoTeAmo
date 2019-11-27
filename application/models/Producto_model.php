<?php
class Producto_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('producto');
        
    }
    
    public function get_productos($limit, $start){
        
        if(!empty($this->input->get("search"))){
          
          $this->db->like('Nombre', $this->input->get("search"));
          $this->db->or_like('Logo', $this->input->get("search")); 
          $this->db->like('Precio', $this->precio->get("search"));
          $this->db->like('Color', $this->input->get("search"));
          $this->db->like('Categoria', $this->input->get("search"));
          $this->db->like('Cantidad', $this->input->get("search"));
          
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get("producto");
        return $query->result();
    }

    public function get_productosc(){     
        $query = $this->db->get("producto");
        return $query->result();
    }
    public function insert_producto($logo)
    {    
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Precio' => $this->input->post('Precio'),
            'Color' => $this->input->post('Color'),
            'Categoria' => $this->input->post('Categoria'),
            'Cantidad' => $this->input->post('Cantidad'),
            'Logo' =>   $logo
        );
        return $this->db->insert('producto', $data);
    }
    public function update_producto($Id,$Logo) 
    {
        $data=array(
            'Nombre' => $this->input->post('Nombre'),
            'Precio' => $this->input->post('Precio'),
            'Color' => $this->input->post('Color'),
            'Categoria' => $this->input->post('Categoria'),
            'Cantidad' => $this->input->post('Cantidad'),
            'Logo' =>   $Logo
        );
        if($Id==0){
            return $this->db->insert('producto',$data);
        }else{
            $this->db->where('Id',$Id);
            return $this->db->update('producto',$data);
        }        
    }

   
}


?>