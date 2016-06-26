<?php

class contatoModel extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function contatoInsert($contNome, $contEmail, $contAssunto, $contComent) {
		
		$data = array(
				'contNome' => $contNome,
				'contEmail' => $contEmail,
				'contAssunto'  => $contAssunto,
				'contComent'  => $contComent
		);
		
		$this->db->insert('contato', $data);
			
		return true;
		
	}

}

?>