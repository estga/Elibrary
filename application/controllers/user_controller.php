<?php
class User_controller extends CI_Controller
{
    function __construct()
    {
		parent::__construct();
		$this->load->model('user_model');
	}
        
    /**
     * Validacion del formulario de registro
     */
	public function valido_usuario()
	{
        //Genero las reglas de validacion
        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('apellido','Apellido','required');
		$this->form_validation->set_rules('correo','Direccion de correo','required|valid_email|is_unique[usuarios.correo]');
		$this->form_validation->set_rules('password','Contraseña','required');

		//Mensaje de error si no pasan las reglas
        $this->form_validation->set_message('required','El campo %s es obligatorio');
        $this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
        $this->form_validation->set_message('is_unique', 'Ya existe un usuario con ese %s');

		if ($this->form_validation->run() == FALSE){ //Si no pasa la validacion
			// Muestra la página de registro con el título de error
			redirect('welcome/fracaso_validacion');
		}else{//Pasa la validacion
            $this->nuevo_usuario();
            //Redirecciono a la pagina de principal
		    redirect('welcome/exito_registro');
		}
	}
		
	/**
	 * Agregar contenido validado a la BD
	 */
	function nuevo_usuario()
	{
        //Preparo los datos para guardar en la base
		$data = array('nombre'   => $this->input->post('nombre',true),
					  'apellido' => $this->input->post('apellido',true),
					  'correo'   => $this->input->post('correo',true),
                      'pass'     => $this->input->post('password',true),
                      'estado'   => '1',
                      'tipo'     => '0',
                      'fecha'    => date("Y-m-d"));

		//Envío el array al método insert del modelo
		$user = $this->user_model->add_usuario($data);
    }

    /**
     * Validacion de atributos cargados en el formulario de inicio de sesion
     */
    function iniciar_sesion_validacion()
    {
        $this->form_validation->set_rules('correo', 'Usuario', 'required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');

        if ($this->form_validation->run() == FALSE){
            redirect('welcome');
        }else{
            $this->usuario_logueado();
        }
    }

    /**
     * Verifica que el usuario no este ya logeado antes de logear
     */
    function usuario_logeado()
    {
        if ($this->session->userdata('login')){
            # code...
        }else{
            # code...
        }
        
    }

    /**
     * Verifico si existe el usuario en la BD
     */
    function _valid_login($password)
    {
        $correo = $this->input->post('correo');
        //Verifico si el usuario y la contraseñas pasados existen en la base de datos
        return $this->user_model->valid_user($correo,$password);
    }
    
    /**
     * Creo una instancia "sesion"
     */
    function sesion($password)
    {
        $usuario = _valid_login($password);
        if ($usuario){
            $sesion_usuario = array();
            # code...
        } else {
            # code...
        }
        
    }

    /**
     * Deslogeo
     */
    function logout()
    {
        //destruyo la variable de sesión
        $this->session->sess_destroy();
        //direcciono a la página principal
        redirect(base_url());
    } 
}
