<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User_controller extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this ->load->model('User_model');
		}
		
	/**
    * Función que verifica si el usuario esta logueado
    */

		private function _veri_log() {
	    	if ($this->session->userdata('logged_in')) {
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}

		/**
	    * Muestra todos los usuarios
	    */
		function index() {
			if($this->_veri_log()) {
			    $data = array('titulo' => 'usuarios');
		
			    $session_data = $this->session->userdata('logged_in');
			    $data['perfil_id'] = $session_data['perfil_id'];
			    $data['nombre'] = $session_data['nombre'];

			    $dat = array('usuarios' => $this->user_model->get_usuarios());

				$this->load->view('partes/head/header');
				$this->load->view('partes/nav/navbar',$data);
				$this->load->view('back/usuarios/muestrausuarios_view', $dat);
				$this->load->view('partes/foot/footer');
			} else {
                redirect('login', 'refresh');
            }
		}
		
		/**
	    * Verifica datos ingresados en el formulario para agregar usuario
	    */
		function agrega_usuario() {
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');
			$this->form_validation->set_rules('username', 'Usuario', 'trim|required|is_unique[usuarios.username]');
			$this->form_validation->set_rules('password', 'Contraseña','required');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required', '<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('is_unique', '<div class="alert alert-danger">El campo %s ya existe</div>');

			$pass = $this->input->post('password',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'   => $this->input->post('nombre',true),
				'apellido' => $this->input->post('apellido',true),
				'email'    => $this->input->post('email',true),
				'username' => $this->input->post('username',true),
				'password' => $this->input->post('password',true)
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)	{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
			
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('partes/head/header');
				$this->load->view('partes/nav/navbar',$data);
				$this->load->view('front/principal');
				$this->load->view('partes/foot/footer');
			} else {	//Pasa la validacion
				//Envio array al metodo add_user para registro de datos
				$usuario = $this->user_model->add_user($data);

				//Redirecciono a la pagina de perfil
				redirect('usuarios_todos');
			}	
		}

		/**
	    * Muestra para modificar un usuario
	    */
		function muestra_modificar() {
			$id = $this->uri->segment(2);
			$datos_usuario = $this->user_model->edit_usuario($id);

			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) {
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$perfil_id = $row->perfil_id;
					$username = $row->username;
					$password = $row->password;
				}

				$dat = array(
                    'usuario'   => $datos_usuario,
					'id'        => $id,
					'nombre'    => $nombre,
					'apellido'  => $apellido,
					'email'     => $email,
					'perfil_id' => $perfil_id,
					'username'  => $username,
					'password'  => $password
				);
			} else {
				return FALSE;
			}

			if($this->_veri_log()) {
			    $data = array('titulo' => 'Modificar Usuario');
			    $session_data = $this->session->userdata('logged_in');
			    $data['perfil_id'] = $session_data['perfil_id'];
			    $data['nombre'] = $session_data['nombre'];

			    $this->load->view('partes/head_view', $data);
			    $this->load->view('partes/menu_view2', $data);
			    $this->load->view('back/usuarios/modificausuario_view', $dat);
			    $this->load->view('partes/footer_view');
			}else{
                redirect('login', 'refresh');
            }
		}

		/**
	    * Muestra para modificar un usuario
	    */
		function modificar_usuario() {
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
			$this->form_validation->set_rules('username', 'Usuario', 'trim|required');
			$this->form_validation->set_rules('password', 'Contraseña','required');
			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[password]');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required', '<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('matches', '<div class="alert alert-danger">Los contraseña ingresada no coincide</div>');

			$this->form_validation->set_message('is_unique', '<div class="alert alert-danger">El campo %s ya existe</div>');

			$pass = $this->input->post('re_password',true);

			$id = $this->uri->segment(2);
			$datos_usuario = $this->user_model->edit_usuario($id);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$dat = array(
				'id'        => $id,
				'nombre'    => $this->input->post('nombre',true),
				'apellido'  => $this->input->post('apellido',true),
				'email'     => $this->input->post('email',true),
				'perfil_id' => $this->input->post('perfil_id',true),
				'username'  => $this->input->post('username',true),
				'password'  => ($pass)
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE) {
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
			
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('partes/head_view', $data);
				$this->load->view('partes/menu_view2');
				$this->load->view('back/usuarios/modificausuario_view', $dat);
				$this->load->view('partes/footer_view');		
			} else {	//Pasa la validacion
				//Envio array al metodo update_usuario para registro de datos
				$usuario = $this->user_model->update_usuario($id, $dat);

				//Redirecciono a la pagina de usuarios
				redirect('usuarios_todos');
			}
		}

		/**
	    * Muestra para modificar un usuario
	    */
		function eliminar_usuario()	{
			$id = $this->uri->segment(2);
			$datos_usuario = $this->user_model->delete_usuario($id);

			//Redirecciono a la pagina de usuarios
			redirect('usuarios_todos');
		}

		//Cierra sesión de ajax
        function logout_ajax() {        
            $this->session->unset_userdata('login_ajax');
            session_destroy();
            redirect('salir');
        }
		
	}
