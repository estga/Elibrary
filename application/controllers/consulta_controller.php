<?php

	class Consulta_controller extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('consulta_model');
		}

		public function valido_consulta()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('correo','Direccion de correo','required');
			$this->form_validation->set_rules('tema','Motivo de la consulta','required');
			$this->form_validation->set_rules('consulta','Mensaje','required');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');

			if ($this->form_validation->run() == FALSE) { //Si no pasa la validacion de datos
				// Muestra la página de registro con el título de error
				$data['titulo']='Fallo Verificacion';
				redirect ('welcome/consultas');
			}else{ //Pasa la validacion
				$this->nueva_consulta();
			}
		}

		/**
		* Agrega
		*/
		function nueva_consulta()
		{
			//Preparo los datos para guardar en la base
			$data = array('nombre'   => $this->input->post('nombre',true),
						  'apellido' => $this->input->post('apellido',true),
						  'correo'   => $this->input->post('correo',true),
						  'tema'     => $this->input->post('tema',true),
                          'consulta' => $this->input->post('consulta',true),
                          'fecha'    => date( "Y-m-d"));

			//Envío array al método insert para registro de datos
			$consulta = $this->consulta_model->add_consulta($data);
			
			//Redirecciono a la pagina de principal
			$data['titulo']='Exito Consulta';

			redirect ('welcome/consultas');
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
?>
