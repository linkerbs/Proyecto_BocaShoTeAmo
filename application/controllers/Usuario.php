<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

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
		$this->load->model('Usuario_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		}
		
	

	public function create()
	{
		if($this->session->userdata('Nivel')==='1')
		{
		$this->load->view('dashboard/usuario/create');
		}
		else{
			redirect('home/');
		}
    }
    	
	public function index()
	{ 
		if($this->session->userdata('Nivel')==='1')
		{
		$config = array();
        $config["base_url"] = base_url() . "/index.php/usuario";
        $config["total_rows"] = $this->Usuario_model->get_count();
        $config["per_page"] = 2;
		$config["uri_segment"] = 2;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
       
        $data["links"] = $this->pagination->create_links();
		$usuarios=new usuario_model;
		$data['data']=$usuarios->get_usuarios($config["per_page"], $page); 
		$this->load->view('dashboard/usuario/usuario',$data);
		}
		else{
			redirect('home/');
		}
		
	}
	/**
	 * Store Data from this method.
	 *

	*/
	public function store()
	{

		if($this->session->userdata('Nivel')==='1')
		{
		
				
				$usuarios =new usuario_model;
				$usuarios->insert_usuario();	
				redirect( base_url('index.php/usuario')); 				
		}
	else
	{
		redirect('home/');
	}
}
        


public function store_C()
	{

		
				
				$usuarios =new usuario_model;
				
				$usuarios->insert_usuario_c();				
				redirect( base_url('index.php/usuario')); 				
}
	/**
	 * Edit Data from this method.
	 *
	 * @return Response
	*/
	public function edit($Id)
	{
		if($this->session->userdata('Nivel')==='1')
		{
		$usuario = $this->db->get_where('usuario', array('Id' => $Id))->row();    
		$this->load->view('dashboard/usuario/edit',array('usuario'=>$usuario));
		}else
		{
			redirect('home/');
		}
	}
		
	
	/**
	 * Update Data from this method.
	 *
	 * @return Response
	*/
	public function update($id)
	{
		if($this->session->userdata('Nivel')==='1')
		{
		
				$usuarios=new usuario_model;		
				$usuarios->update_usuario($id);				
				redirect( base_url('index.php/usuario')); 				
		}else
		{
			redirect('home/');
		}
		
		
	}

	/**
	 * Delete Data from this method.
	 *
	 * @return Response
	*/
	public function delete($Id)
	{
		if($this->session->userdata('Nivel')==='1')
		{
		$this->db->where('Id', $Id);
		$this->db->delete('usuario');
		
		redirect( base_url('index.php/usuario')); 	
	    }else
		{
			redirect('home/');
		}
 
 

}




	


}
