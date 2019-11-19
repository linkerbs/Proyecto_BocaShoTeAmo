<?php
class Patrocinador_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function getAll()
    {
        $result = $this->db->get('Patrocinador');
        $patrocinadores = $result->result_array();
        return $patrocinadores;
    }

    public function createOrUpdate()
    {
        $this->load->helper('url');
        $nombre = $this->input->post('nombre');
 
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Logo' => $this->input->post('Logo')
        );
        if (empty($id)) {
            return $this->db->insert('patrocinador', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('patrocinador', $data);
        }
    }
}
?>