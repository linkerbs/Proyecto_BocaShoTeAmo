<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class noticia extends CI_Controller {

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
		$this->load->model('Noticia_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		}
		
	

	public function create()
	{
		if($this->session->userdata('Nivel')==='1')
		{
		$this->load->view('dashboard/noticia/create');
		}
	else
	{
		redirect('home/');
	}
}
    	
	public function index()
	{ 
		if($this->session->userdata('Nivel')==='1')
		{
		$config = array();
        $config["base_url"] = base_url() . "/index.php/noticia";
        $config["total_rows"] = $this->Noticia_model->get_count();
        $config["per_page"] = 2;
		$config["uri_segment"] = 2;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
       
        $data["links"] = $this->pagination->create_links();
		$noticias=new noticia_model;
		$data['data']=$noticias->get_noticias($config["per_page"], $page); 
		$this->load->view('dashboard/noticia/noticia',$data);
	}else
	{
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
		$config['upload_path']          = './assets/img/noticia';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;

		$this->load->library('upload', $config);
        
		if ( ! $this->upload->do_upload('Logo'))
		{
				$error = array('error' => $this->upload->display_errors());
				foreach($error as $s) echo $s;
				

			
		}
		else
		{
				
				$upload_data = $this->upload->data();
				//get the uploaded file name
				$data['Logo'] = $upload_data['file_name'];

				
				$noticias=new noticia_model;
				
				$noticias->insert_noticia($data['Logo'] );				
				redirect( base_url('index.php/noticia')); 				
		}
	}else
	{
		redirect('home/');
	}
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
		$noticia = $this->db->get_where('noticia', array('Id' => $Id))->row();    
		$this->load->view('dashboard/noticia/edit',array('noticia'=>$noticia));
	
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
		$noticia=new noticia_model;
		
		echo "ADIOS";
		$config['upload_path']          = './assets/img/noticia';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;

		$this->load->library('upload', $config);
        
		if ( ! $this->upload->do_upload('Logo'))
		{
				$error = array('error' => $this->upload->display_errors());
				foreach($error as $s) echo $s;
				

			
		}
		else
		{
				
				$upload_data = $this->upload->data();
				//get the uploaded file name
				$data['Logo'] = $upload_data['file_name'];

				
				$noticiaes=new noticia_model;
				
				$noticiaes->update_noticia($id,$data['Logo']);				
				redirect( base_url('index.php/noticia')); 				
		}
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
		$this->db->delete('noticia');
		
		redirect( base_url('index.php/noticia')); 	
	}
else
{
	redirect('home/');
}
 
 

	}
}




	



