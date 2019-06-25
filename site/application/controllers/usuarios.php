<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model', 'u');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('usuarios', array());
    }

    public function form()
    {    
        if ($this->uri->segment(3) == 'novo') {
            $dados['action'] = 'novo';
            $this->load->view('usuarios_form', $dados);
        } 
        else if ($this->uri->segment(3) == 'altera') {
            $idUsuario = $this->uri->segment(4);
            $usuario = $this->u->getUsuarioById($idUsuario);
            
            $dados['usuario'] = $usuario;
            $dados['action']  = 'altera';
            
            $this->load->view('usuarios_form', $dados);
        }
            
    }

    public function novo()
    {
        $arr['str_nome'] = $_POST['str_nome'];
        $arr['str_login'] = $_POST['str_login'];
        $arr['str_email'] = $_POST['str_email'];
        $arr['str_cargo'] = $_POST['str_cargo'];
        $arr['str_senha'] = $_POST['str_senha'];
        $arr['str_telefone'] = $_POST['str_telefone'];
        
        if ($this->u->novo($arr)) {
            redirect('usuarios', 'refresh');
        }
    }

    public function altera()
    {
        $idUsuario = $_POST['idUsuario'];
        $arr['str_nome'] = $_POST['str_nome'];
        $arr['str_login'] = $_POST['str_login'];
        $arr['str_email'] = $_POST['str_email'];
        $arr['str_cargo'] = $_POST['str_cargo'];
        $arr['str_senha'] = $_POST['str_senha'];
        $arr['str_telefone'] = $_POST['str_telefone'];

        if ($this->u->altera($idUsuario, $arr)) {
            redirect('usuarios', 'refresh');
        }
    }

    public function exclui()
    {
        $idUsuario = $this->uri->segment(3);
        if ($this->u->deleteUsuario($idUsuario)) {
            $this->load->view('usuarios');
        }
    }

    public function getUsuarios()
    {
        $draw     = intval($this->input->get("draw"));
        $start    = intval($this->input->get("start"));
        $length   = intval($this->input->get("length"));
        $usuarios = $this->u->getUsuarios();

        $data = array();

        foreach($usuarios->result() as $r) {

            $linkAltera = anchor('usuarios/form/altera/'.$r->id, '<i class="fas fa-edit"></i>');
            // $linkExclui = anchor('usuarios/exclui/'.$r->id, '<i class="fas fa-trash-alt"></i>');
            $linkExclui = '<a onclick="deletar('.$r->id.')"><i class="fas fa-trash-alt"></i></a>';

            $data[] = array($r->str_nome,
                            $r->str_email,
                            $r->str_login,
                            $r->str_cargo,
                            $r->str_telefone,
                            $linkAltera.' '.$linkExclui);
        }

        $output = array("draw"            => $draw,
                        "recordsTotal"    => $usuarios->num_rows(),
                        "recordsFiltered" => $usuarios->num_rows(),
                        "data"            => $data);
          
        echo json_encode($output);

        exit();
    }
}