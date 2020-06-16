<?php
class Consulta_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    /**
	 * Agregar contenido a la BD
	 */
	function add_consulta($data)
	{
		$this->db->insert('consultas', $data);
	}

    /**
     * Trae todas las consultas de la DB
     */
	public function get_consultas()
	{
    	$this->db->select('*');
    	$this->db->from('consultas');
    	$this->db->order_by('fecha', 'DESC');
    	$query = $this->db->get();
    	return $query->result();
  	}

}
