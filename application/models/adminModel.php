<?php

class adminModel extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function sobreSelect(){
		
		$query = $this->db->get('sobre');
		//$query->result_array() //varios
		
		$row = $query->row();
		
		return $row;
	}
	
	function carreiraSelect(){
	
		$query = $this->db->get('carreira');
		//$query->result_array() //varios
	
		$row = $query->row();
	
		return $row;
	}
	
	function trabalhoSelect(){
	
		$query = $this->db->get('trabalho');
		//$query->result_array() //varios
	
		$row = $query->row();
	
		return $row;
	}
	
	
	function sobreUpdate($sobreMsgInicial, $sobreFoto, $sobreNomeCompleto, $sobreDadosBasicos, $sobreResumo, $sobreMetas, $sobreHobbies) {
		
		$data = array(
				'sobreMsgInicial' => $sobreMsgInicial,
				'sobreFoto' => $sobreFoto,
				'sobreNomeCompleto'  => $sobreNomeCompleto,
				'sobreDadosBasicos'  => $sobreDadosBasicos,
				'sobreResumo'  => $sobreResumo,
				'sobreMetas'  => $sobreMetas,
				'sobreHobbies'  => $sobreHobbies
		);
		
		$this->db->replace('sobre', $data);
			
		return true;
		
	}
	
	function carreiraUpdate($carrInicial, $carrFormAca, $carrIdiomas, $carrExp, $carrExpInt) {
	
		$data = array(
				'carrInicial' => $carrInicial,
				'carrFormAca'  => $carrFormAca,
				'carrIdiomas'  => $carrIdiomas,
				'carrExp'  => $carrExp,
				'carrExpInt'  => $carrExpInt
		);
	
		$this->db->replace('carreira', $data);
						
		return true;
		
	}
	
	function trabalhoUpdate($trabProjReal, $trabProjFut) {
	
		$data = array(
				'trabProjReal' => $trabProjReal,
				'trabProjFut'  => $trabProjFut
		);
	
		$this->db->replace('trabalho', $data);
		
		return true;
			
	}

}

?>