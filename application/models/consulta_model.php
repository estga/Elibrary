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

}
