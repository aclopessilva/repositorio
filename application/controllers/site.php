<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('contatoModel');
    }

    public function index() {
        $this->load->view('common/headerSite');
        $this->load->view('site/home');
        $this->load->view('common/footerSite');
    }

    public function sobre() {
        $this->load->view('common/headerSite');
        $sobre = $this->AdminModel->sobreSelect();
        $data['sobre'] = $sobre;
        $this->load->view('site/sobre', $data);
        $this->load->view('common/footerSite');
    }

    public function carreira() {
        $this->load->view('common/headerSite');
        $carreira = $this->AdminModel->carreiraSelect();
        $data['carreira'] = $carreira;
        $this->load->view('site/carreira', $data);
        $this->load->view('common/footerSite');
    }

    public function trabalho() {
        $this->load->view('common/headerSite');
        $trabalho = $this->AdminModel->trabalhoSelect();
        $data['trabalho'] = $trabalho;
        $this->load->view('site/trabalho', $data);
        $this->load->view('common/footerSite');
    }

    public function contato() {
        $this->load->view('common/headerSite');
        $this->load->view('site/contato');
        $this->load->view('common/footerSite');
    }

    public function mural() {

        if (isset($_GET['pagina'])) {
            //** PARA URL MALICIOSA!**//
            //metodo antigo inseguro
//            $pagina = $_GET['pagina'];            
//            $pagina = $this->security->xss_clean($pagina);
            
            //limpando o parametro pagina, usando codeigniter
            //https://www.codeigniter.com/user_guide/libraries/input.html
            $pagina = $this->input->get('pagina');
            
        } else {
            $pagina = 1;
        }

        $comentarios = $this->AdminModel->comentariosLista($pagina);
        $data['comentarios'] = $comentarios;
        $data['pagina'] = $pagina;

        $this->load->view('common/headerSite');
        $this->load->view('site/mural', $data);
        $this->load->view('common/footerSite');
    }

    public function contatoEnviar() {
//        $x1 = $_POST['contNome'];
        $x1 = $this->input->post('contNome');
        $x2 = $this->input->post('contEmail');
        $x3 = $this->input->post('contAssunto');
//        $x4 = $_POST['contComent'];
        $x4 = $this->input->post('contComent');

        $testa = $this->contatoModel->contatoInsert($x1, $x2, $x3, $x4);

        if ($testa) {
            $this->session->set_flashdata('mensagem', 'Mensagem enviada com sucesso!');
            redirect("site");
        } else {
            $this->session->set_flashdata('mensagem', 'Ops! Mensagem nao enviada. Tente novamente mais tarde.');
            redirect("site");
        }
    }

}
