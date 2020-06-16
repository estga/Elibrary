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
	 */

    public function _construct() {
		parent::_construct();
    }
    
	public function index()
	{
        $data['titulo']='Elibrary - Home';

        $this->load->view('partes/head/header', $data);
		$this->load->view('partes/nav/navbar', $data);
		$this->load->view('partes/contenido/home-section');
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why-choose-section');
        $this->load->view('partes/foot/footer');
    }
    
    public function consultas()
	{
        $this->load->model('consulta_model');
        $data['consultas'] = $this->consulta_model->get_consultas();
        $data['titulo']='Elibrary - Consultas';

		$this->load->view('partes/head/header', $data);
		$this->load->view('partes/nav/navbar-consulta');
		$this->load->view('partes/contenido/contact-view');
		$this->load->view('partes/contenido/contact-section', $data);
		$this->load->view('partes/foot/footer-consulta');
    }

    public function fracaso_validacion(){
        $data['titulo']='Fallo Verificacion';

		$this->load->view('partes/head/header', $data);
        $this->load->view('partes/contenido/falla-validacion');
		$this->load->view('partes/nav/navbar');
		$this->load->view('partes/contenido/home-section', $data);
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why-choose-section');
		$this->load->view('partes/foot/footer');
    }

    public function exito_consulta(){
        $data['titulo']='Exito Verificacion';
        
		$this->load->view('partes/head/header', $data);
        $this->load->view('partes/contenido/exito-consulta');
		$this->load->view('partes/nav/navbar');
		$this->load->view('partes/contenido/home-section', $data);
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why-choose-section');
		$this->load->view('partes/foot/footer');
    }

    public function exito_registro(){
        $data['titulo']='Exito Verificacion';
        
		$this->load->view('partes/head/header', $data);
        $this->load->view('partes/contenido/exito-registro');
		$this->load->view('partes/nav/navbar');
		$this->load->view('partes/contenido/home-section', $data);
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why-choose-section');
		$this->load->view('partes/foot/footer');
    }

    public function bienvenida_logeo(){
        $data['titulo']='Bienvenido';
        
		$this->load->view('partes/head/header', $data);
        $this->load->view('partes/contenido/bienvenida-logeo', $data);
		$this->load->view('partes/nav/navbar');
		$this->load->view('partes/contenido/home-section', $data);
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why-choose-section');
		$this->load->view('partes/foot/footer');
    }

    public function falla_logeo(){
        $data['titulo']='Falla logeo';
        
		$this->load->view('partes/head/header', $data);
        $this->load->view('partes/contenido/falla-logeo');
		$this->load->view('partes/nav/navbar');
		$this->load->view('partes/contenido/home-section', $data);
		$this->load->view('partes/contenido/service-section');
		$this->load->view('partes/contenido/program-section');
		$this->load->view('partes/contenido/event-section');
		$this->load->view('partes/contenido/why-choose-section');
		$this->load->view('partes/foot/footer');
    }

    public function perfil(){
        $data['titulo']='Perfil';
        
		$this->load->view('partes/head/header', $data);
		$this->load->view('partes/nav/navbar-consulta');
        $this->load->view('partes/contenido/perfil-view');
		$this->load->view('partes/foot/footer');
    }
}
