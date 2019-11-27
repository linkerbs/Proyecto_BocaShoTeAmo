<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 * 
	 * 
	 */

	function __construct() {
		parent::__construct();
		
		// Load url helper
		$this->load->helper('url');
		$this->load->model('Afiliado_model');
		$this->load->model('Equipo_model');
		$this->load->model('Patrocinador_model');
		$this->load->model('Noticia_model');
		$this->load->model('Jugador_model');
		$this->load->model('Producto_model');
		$this->load->model('Carro_model');
		}
		
	public function index()
	{
		$equipo = new equipo_model;
		$query['equipos'] = $equipo->get_equiposc();

		$afiliado = new afiliado_model;
		$query['afiliados'] = $afiliado->get_afiliadosc();

		$patrocinador = new patrocinador_model;
		$query['patrocinadores'] = $patrocinador->get_patrocinadoresc();

		$noticias = new noticia_model;
		$query['noticias'] = $noticias->get_noticiasc();

		$this->load->view('public/index',$query);
	}

	public function quienes()
	{
		$equipo = new equipo_model;
		$query['equipos'] = $equipo->get_equiposc();
		$this->load->view('public/quienesomos',$query);
	}

	public function tienda()
	{
		if($this->session->userdata('Nivel')==='4'){
		$producto = new producto_model;
		$query['productos'] = $producto->get_productosc();
		$this->load->view('public/tienda',$query);
		}else{
			echo "Access Denied";
		}
   
		
	}

	public function store_carro()
	{
		if($this->session->userdata('Nivel')==='4'){
			$carros=new carro_model;
			$carros->insert_carro($data);				
			redirect('home/view_carro/'.$this->session->userdata('Id')); 
		}else{
			echo "Access Denied";
		}


   
		
	}


	public function delete_carro($id)
	{
		if($this->session->userdata('Nivel')==='4'){
	    //Obtengo id del producto que es ide
	   $this->db->select('Id_producto');
       $this->db->where('Id',$id);
	   $query = $this->db->get('carro')->row(); 

	   $ide = $query->Id_producto;
	   
	   //Aqui obrenemos la cantidad de productos en el carrito que es cantidad
	   $this->db->select('Cantidad');
       $this->db->where('Id',$id);
	   $query = $this->db->get('carro')->row(); 

	   $cantidad = $query->Cantidad;
	
	   //Aqui obtenemos la cantidad de productos en genreal
	   $this->db->select('Cantidad');
       $this->db->where('Id',$ide);
	   $query = $this->db->get('producto')->row();
	   
       $final = $query->Cantidad + $cantidad;
      
       $this->db->set('Cantidad',$final);
       $this->db->where('Id',$ide);
       $this->db->update('producto');	
		

	   $this->db->where('Id', $id);
	   $this->db->delete('carro');

	   redirect('home/tienda');
		}else{
			echo "Access Denied";
		}
   
		
	}

	public function view_carro($id)
	{
		if($this->session->userdata('Nivel')==='4'){
			$carros=new carro_model;
			$query['carros'] = $carros->get_carro($id);				
			$this->load->view('public/pagar',$query);
		}else{
			echo "Access Denied";
		}
   
		
	}


	public function actualizar_todo($id)
	{
		if($this->session->userdata('Nivel')==='4'){
			$carros=new carro_model;
			$carros->insert_orden($id);
			
			redirect('home');
		}else{
			echo "Access Denied";
		}
   
		
	}

	public function register()
	{
		
		$this->load->view('public/register');
		
	}



	public function equipos($Id)
	{
		$equipo = new equipo_model;
		$query['equipos'] = $equipo->get_equiposc();
		$jugador = new jugador_model;
		$query['jugador'] = $jugador->get_jugadoresequi($Id);
		$query['equipo'] = $this->db->get_where('equipo', array('Id' => $Id))->row();  
		
		
		$this->load->view('public/equipos',$query);
	}
}
