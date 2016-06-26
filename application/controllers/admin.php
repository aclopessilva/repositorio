[<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		
		if(isSet($this->session->logado) && $this->session->logado == true){
			$this->load->model('AdminModel');
		}else{
			redirect('login');
		}
		
	}
	
	public function index()
	{
			$this->load->view('common/header');

			$sobre = $this->AdminModel->sobreSelect();
			$data['sobre'] = $sobre;
			
			$carreira = $this->AdminModel->carreiraSelect();
			$data['carreira'] = $carreira;
			
			$trabalho = $this->AdminModel->trabalhoSelect();
			$data['trabalho'] = $trabalho;
			
			$this->load->view('admin', $data);
			$this->load->view('common/footer');
	}
	
	
	public function sobre(){
	
		$x1 = $_POST['sobreMsgInicial'];
		$x2 =  $_POST['sobreFoto'];
		$x3 = $_POST['sobreNomeCompleto'];
		$x4 =  $_POST['sobreDadosBasicos'];
		$x5 = $_POST['sobreResumo'];
		$x6 =  $_POST['sobreMetas'];
		$x7 =  $_POST['sobreHobbies'];
		
		$testa = $this->AdminModel->sobreUpdate($x1, $x2, $x3, $x4, $x5, $x6, $x7);
		
		redirect("admin");
		
	}
	
	public function carreira(){
	
		$x1 = $_POST['carrInicial'];
		$x2 =  $_POST['carrFormAca'];
		$x3 = $_POST['carrIdiomas'];
		$x4 =  $_POST['carrExp'];
		$x5 = $_POST['carrExpInt'];
		
		$testa = $this->AdminModel->carreiraUpdate($x1, $x2, $x3, $x4, $x5);

		redirect("admin");
		
	}
	
	public function trabalho(){
	
		$x1 = $_POST['trabProjReal'];
		$x2 =  $_POST['trabProjFut'];
		
		$testa = $this->AdminModel->trabalhoUpdate($x1, $x2);
		
		redirect("admin");
		
	}
	
}