<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		
		$this->load->model('Carro_model');

		$this->load->model('Usuario_model');

		}
		
	public function index()
	{
		if($this->session->userdata('Nivel')==='1')
		{
			$this->load->view('dashboard/index');
		}
		else{
			redirect('home/');
		}
		



	}


	public function config()
	{
		if($this->session->userdata('Nivel')==='1')
		{

			$this->load->view('dashboard/config/config');
		}
		else{
			redirect('home/');
		}	
	}



	public function contra()
	{
		if($this->session->userdata('Nivel')==='1')
		{
			
			 
			$usuarios=new usuario_model;
				
				$usuarios->update_clave($this->session->userdata('Id'));				
				redirect( base_url('index.php/dashboard')); 		
			
		}
		else{
			redirect('home/');
		}	
	}





	
}


