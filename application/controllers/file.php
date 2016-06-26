<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {
	
	function __construct() {
		parent::__construct();
			$this->load->model('AdminModel'); 
	}
	

	public function resumopdf()
	{ 
		$this->load->helper('mpdf_helper');
		
		$sobre = $this->AdminModel->sobreSelect();
		$data['sobre'] = $sobre;
		$htmlSobre = $this->load->view('site/sobre', $data, true);
		

		$carreira = $this->AdminModel->carreiraSelect();
		$data['carreira'] = $carreira;
		$htmlCarreira = $this->load->view('site/carreira', $data, true );
		
		
		$trabalho = $this->AdminModel->trabalhoSelect();
		$data['trabalho'] = $trabalho;
		$htmlTrabalho = $this->load->view('site/trabalho', $data, true);
		
		$htmlFinal = $htmlSobre.$htmlCarreira.$htmlTrabalho;
		
		pdf($htmlFinal, 'teste.pdf');
		
	}
	 
	 
	
}
