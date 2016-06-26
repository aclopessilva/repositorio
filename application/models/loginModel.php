<?php

class loginModel extends CI_Model {
	
	function __construct() {
		parent::__construct();		
	}
	
	function login($usuario = '', $senha = '') {
		  
		$query = $this->db->get_where(
				'login', 
					array(
						'usuario' => $usuario,
						'senha' => $senha
					)
				);
		$row = $query->row();
 
		echo $row;
		if (isset($row)){
			return true;
		}else{
			return false;
		}
		 
	}
	
}

?>