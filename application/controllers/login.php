<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){ 
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
		
	}
	
	public function auth(){
		
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		
		$this->load->model('loginModel');
		
		$resposta = $this->loginModel->login($usuario, $senha);
		
		if($resposta){
			$this->session->logado = true;
			redirect('admin');
		}else{
			$this->session->set_flashdata('mensagem','(User || Password) == invalid. Please try again.');
			redirect('login');
			/*
			$this->load->view('common/header');
			
			$data['mensagem'] = '(User || Password) == invalid. Please try again.';
			$this->load->view('login',$data);
			$this->load->view('common/footer');
			*/
		}
	}
	
	public function logout(){

		$this->session->logado = false;
		redirect('login');
		
	}
	
}
