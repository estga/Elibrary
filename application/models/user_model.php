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
     * si existe lo devuelve
     */
    function valid_user($correo, $pass)
    {
        //version larga
        $this->db->where('correo', $correo);
        $this->db->where('pass', $pass);
        $query = $this->db->get('usuarios');
        //version corta
        //$query = $this->db>get_where('users',array('username'=>$username,'password'=>$password));
        if(($query->num_rows() == 1) AND ($query->row()->estado == 1)){
            return $query->result();
        }else{
            return FALSE;
        }
    }

    /**
     * Verifica si existe usuario con ese correo
     */
    function valid_user_ajax($correo)
    {
        $this->db->where('correo', $correo);
        $query = $this->db->get('usuarios');
        if($query->num_rows() >0){
            echo $query->num_rows();
        }
    }

}

