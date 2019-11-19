<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patrocinador extends CI_Controller {

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
		$this->load->model('Patrocinador_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
		}
		
	public function index()
	{
		
		$this->load->view('dashboard/patrocinador/patrocinador');
	}

	public function create()
	{
		
		$this->load->view('dashboard/patrocinador/create');
    }
    
    public function store()
    {
 
        $path = base_url(); + 'assets/img';
        // Define file rules
        $initialize = $this->upload->initialize(array(
            "upload_path" => $path,
            "allowed_types" => "gif|jpg|jpeg|png|bmp",
            "remove_spaces" => TRUE
        ));
        $imagename = 'no-img.jpg';
        if (!$this->upload->do_upload('Logo')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $data['patrocinador'] = $this->Patrocinador_model->createOrUpdate();
            redirect( base_url('index.php/dashboard/patrocinador') ); 
            
        }            
    }    
            
        
         
    }



	
}


