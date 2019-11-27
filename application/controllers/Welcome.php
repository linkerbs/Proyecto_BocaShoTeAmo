<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		}
		
	public function index()
	{
		$equipo = new equipo_model;
		$query['equipos'] = $equipo->get_equiposc();

		$afiliado = new afiliado_model;
		$query['afiliados'] = $afiliado->get_afiliadosc();

		$patrocinador = new patrocinador_model;
		$query['patrocinadores'] = $patrocinador->get_patrocinadoresc();

		$equipo = new noticia_model;
		$query['noticias'] = $noticias->get_noticiasc();

		foreach ($query['equipos'] as $list):
        echo $list->Nombre;
		endforeach;

		//$this->load->view('public/index',$query);

	}

	public function quienes()
	{
		$this->load->view('public/quienesomos');
	}

	public function equipos()
	{
		$this->load->view('public/equipos');
	}
}
