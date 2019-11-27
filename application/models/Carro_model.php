<?php
class Carro_model extends CI_Model{
   
    
     
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_count() {
        return $this->db->count_all('carro');
        
    }
    public function get_carro($Id_usuario){  
        $this->db->select('Logo,Id_usuario,Id_producto,carro.Cantidad,carro.Id,Total,Categoria,Nombre');
        $this->db->from('carro');
        $this->db->join('producto', 'producto.Id = carro.Id_producto');
        $this->db->where('Estado',1);
        $this->db->where('Id_usuario', $Id_usuario);
        
        $query = $this->db->get();
        return $query->result();
    }
    
    public function insert_carro()
    {    
        $siu = $this->input->post('Cantidad');
        $siu2 = $this->input->post('Precio');

        $total = $siu * $siu2;
        $data = array(
            'Id_producto' => $this->input->post('Id_producto'),
            'Id_usuario' => $this->input->post('Id_usuario'),
            'Cantidad' => $this->input->post('Cantidad'),
            'Estado' => 1,
            'Total' => $total
        );
        echo $total;
      $this->db->insert('carro', $data);


       
       $this->db->select('Cantidad');
       $this->db->where('Id',$this->input->post('Id_producto'));
       $query = $this->db->get('producto')->row(); 

       $final = $query->Cantidad - $siu;
      
       $this->db->set('Cantidad',$final);
       $this->db->where('Id', $this->input->post('Id_producto'));
       $this->db->update('producto');	

       
    
    }


    public function insert_orden($id)
    {    
        $iden = uniqid();
        $this->db->select_sum('Total');
        $this->db->where('Estado',1);
        $this->db->where('Id_usuario',$id);
        $query = $this->db->get('carro')->row(); 
        

        $fecha = date("Y/m/d");
        $data = array(
            'Estado' => 1,
            'Fecha' => $fecha ,
            'Identificador' => $iden,
            'Total' => $query->Total
        );
        
       $this->db->insert('orden', $data);
       
       $idc = $this->db->insert_id();
       echo $idc;

       $this->db->set('Estado',2);
       $this->db->set('Id_orden',$idc);
       $this->db->where('Estado', 1);
       $this->db->where('Id_usuario', $id);
       $this->db->update('carro');	


       //AQUI UNA ALETRA QUE DICE TU CODIGO ES $IDEN
	
    
    }
  

   
}


?>