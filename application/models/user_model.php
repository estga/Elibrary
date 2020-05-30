<?php 
	class Usuario_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
	}

	/**
	 * Agregar
	 */
	function add_user($data){
		$this->db->insert('usuarios', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	/**
	 * Modificar campos mediante $id
	 * el controlador se encarga de llenar las variables en $data
	 * ej:
	 *		$data = array(
	 *			'name' => $name,
	 *			'last_name' => $last_name,
	 * 			'username' => $username,
	 *			'password' => $password
	 *		);
	 */
	function update_user($id, $data){
		

		$this->db->where('id', $id);
		return $this->db->update('users', $data);
	}

	/**
	 * Obtener id de ultima insercion
	 */
	function get_id(){
		$id = $this->db->insert_id();
	}

	/**
	 * Eliminar
	 */
	function delete_user($id){
		$this->db->where('id', $id);
		$query = $this->db->delete('users');
	}
?>
