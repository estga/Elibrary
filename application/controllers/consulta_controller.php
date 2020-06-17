<?php
class Consulta_controller extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('consulta_model');
	}

    /**
     * Validacion del formulario de registro
     */
	public function valido_consulta()
	{
		//Genero las reglas de validacion
		$this->form_validation->set_rules('correo','Direccion de correo','required|valid_email|is_unique[usuarios.correo]');
		$this->form_validation->set_rules('tema','Motivo de la consulta','required');
		$this->form_validation->set_rules('consulta','Mensaje','required');

		//Mensaje de error si no pasan las reglas
        $this->form_validation->set_message('required','El campo %s es obligatorio');
        $this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
        $this->form_validation->set_message('is_unique', 'Loguéese para poder realizar el comentario');

		if ($this->form_validation->run() == FALSE) { //Si no pasa la validacion de datos
			// redirecciona la página de consultas con el título de error
			$data['titulo']='Fallo Verificacion';
			redirect ('welcome/fracaso_validacion');
		}else{ //Pasa la validacion
			$this->nueva_consulta();
		}
	}

	/**
	* Agregar contenido validado a la BD
	*/
	function nueva_consulta()
	{
		//Preparo los datos para guardar en la base
		$data = array('nombre'   => $this->input->post('nombre',true),
					  'apellido' => $this->input->post('apellido',true),
					  'correo'   => $this->input->post('correo',true),
					  'tema'     => $this->input->post('tema',true),
                      'consulta' => $this->input->post('consulta',true),
                      'fecha'    => date("Y-m-d"));

		//Envío el array al método insert para registro de datos a la BD
		$consulta = $this->consulta_model->add_consulta($data);
			
		//Redirecciono a la pagina de principal
		$data['titulo']='Exito Consulta';
		redirect ('welcome/exito_consulta');
	}

	public function listar_consultas()
	{
		$data['consultas'] = $this->consulta_model->get_consultas();
	    $data['title'] = 'Listado de Consultas';

		$this->load->view('partes/head/header', $data);
	    $this->load->view('partes/nav/navbar-consulta');
	    $this->load->view('partes/contenido/contact-view', $data);
	    $this->load->view('partes/contenido/contact-section');
	    $this->load->view('partes/foot/footer-consulta');
	}

}