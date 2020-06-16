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
        //Reglas de validación
        $this->form_validation->set_rules('correo', 'Usuario', 'trim|required');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|callback__valid_login');

        //Mensajes en caso de error
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('_valid_login', 'El usuario o contraseña son incorrectos');

        //Forma en que muestra los mensajes de error
		$this->form_validation->set_error_delimiters('<ul><li>', '</li></ul>');

        if ($this->form_validation->run() == FALSE){
            redirect('welcome/falla_logeo');
        } else {
            redirect('welcome/bienvenida_logeo');
        }
    }

    /**
     * Verifico si existe el usuario en la BD
     */
    function _valid_login()
    {
        $password = $this->input->post('password');
        $correo = $this->input->post('correo');
        //Verifico si el usuario y la contraseñas pasados existen en la base de datos
        $usuario = $this->user_model->get_user($correo,$password);

        if ($usuario){ //Si el resultado es correcto lo asigna a la variable session
            $sess_array = array('id_usuario' => $usuario->id_usuario,
                                'nombre' => $usuario->nombre,
                                'apellido' => $usuario->apellido,
                                'correo' => $usuario->correo,
                                'pass' => $usuario->pass,
                                'direccion' => $usuario->direccion,
                                'telefono' => $usuario->telefono,
                                'estado' => $usuario->estado,
                                'tipo' => $usuario->tipo,
                                'fecha' => $usuario->fecha,
                                'logged_in' => true);
            $this->session->set_userdata($sess_array);
            return true;
        }else{
            $this->form_validation->set_message('verificar_password','Usuario o contraseña invalido');
            return false;
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

    function perfil($id_usuario)
    {
		$data = array('titulo' => 'Perfil');
		
		$session_data = $this->session->userdata('logged_in');
		$data['id_usuario'] = $session_data['id_usuario'];
		$data['tipo'] = $session_data['tipo'];
		$data['nombre'] = $session_data['nombre'];

		$dat = array('user' => $this->usuario_model->get_by_id($id));

		$this->load->view('partes/head/header', $data);
		$this->load->view('partes/nav/navbar-consulta', $data);
		$this->load->view('back/muestraperfil_view', $dat);
		$this->load->view('partes/foot/footer-consulta');
    }

    /**
     * Lista todos los usuarios cargados en la DB
     */
    public function listar_usuarios()
	{
		$data['usuarios'] = $this->user_model->get_users();
	    $data['title'] = 'Lista de Usuarios';

		$this->load->view('partes/head/header', $data);
	    $this->load->view('partes/nav/navbar-consulta');
	    $this->load->view('partes/contenido/usuarios-view', $data);
	    $this->load->view('partes/foot/footer-consulta');
    }
    
}
