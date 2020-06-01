<?php
class Consulta_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function add_consulta($data)
	{
		$this->db->insert('consultas', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function get_consultas()
	{
    	$this->db->select('*');
    	$this->db->from('consultas');
    	$this->db->order_by('fecha', 'DESC');
    	$query = $this->db->get();
    	return $query->result();
  	}

}
