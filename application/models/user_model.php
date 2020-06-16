<?php 
class User_model extends CI_Model
{
    public function __construct()
    {
		parent::__construct();
    }
        
    /**
     * Agregar contenido a la BD
     */
    function add_usuario($data)
    {
	    $this->db->insert('usuarios', $data);
    }
    
    /**
     * Verifica si existe usuario con ese correo y contraseña
     * y lo devuelve
     */
    function get_user($correo, $pass)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('correo', $correo);
        $this->db->where('pass', $pass);
        $query = $this->db->get();
        $resultado = $query->row();
        return $resultado;
    }

    /**
     * Trae todos los usuarios de la DB
     */
    function get_users()
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $query = $this->db->get();
        return $query->result();
    }

}

