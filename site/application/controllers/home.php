<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model', 'l1');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Projetos_model', 'p1');
        $this->load->model('imagens_model', 'i1');
        $arrProjetos = $this->p1->getProjetos()->result();
        foreach ($arrProjetos as $key => $value) {
            // ver($arrProjetos);
            $arrImagens = $this->i1->getImagens($value->id);
            $arrProjetos[$key]->imagens = $arrImagens;
        }   
        // ver($arrProjetos);
        $data['arrProjetos'] = $arrProjetos;
        // ver($data);
        $this->load->view('home', $data);
        // echo "Hello World";
        // $this->l1->salvar();
    }
}