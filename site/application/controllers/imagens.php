<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagens extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Imagens_model', 'i');
        $this->load->helper('url');
    }

    public function upload()
    {
        // ver($_FILES);
        $config['upload_path'] = '../projetos/'.$_POST['idProjeto'];
        $config['allowed_types'] = '*';
        $config['maintain_ratio'] = TRUE; 
        $config['width'] = 540;
        $config['height'] = 300;

        // ver($config);
        $this->load->library('upload', $config);
        $this->upload->do_upload('str_imagem');
        $file_name = $this->upload->data();
        // ver($file_name);
        $data = ['str_imagem' => $file_name['file_name'], 'id_projeto' => $_POST['idProjeto']];
        if ($this->i->upload($data)) {
            redirect('projetos/imagens/'.$_POST['idProjeto'], 'refresh');
        }
    }

    public function exclui()
    {
        $this->load->model('Projetos_model', 'p1');
        $idImagem = $this->uri->segment(4);
        if ($this->i->deleteImagem($idImagem)) {
            $idProjeto = $this->uri->segment(3);
            $arrProjeto = $this->p1->getProjetos($idProjeto);
            // ver($arrProjeto);
            $nomeProjeto = $arrProjeto->str_nome;
            $dados['nomeProjeto'] = $nomeProjeto;
            // $this->load->view('imagens_form', $dados);
            redirect('projetos/imagens/'.$idProjeto, 'refresh');
            // redirect($this->uri->uri_string());
        }
    }
}