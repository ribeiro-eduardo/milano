<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model', 'u');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login', array());
    }

    public function autentica()
    {
        $str_login = $this->input->post('str_login');
        $str_senha = $this->input->post('str_senha');
        $usuario = $this->u->login($str_login, $str_senha);
        // echo $str_login."<br>".$str_senha;
        // var_dump($usuario);
        if ($usuario) {
            $this->session->set_userdata('usuario_logado', $usuario);
            $this->session->set_flashdata('success', "Usuário logado com sucesso");
            // redirect('home');
            redirect('home', 'refresh');
        }
        else {
            $this->session->set_flashdata('danger', "Ops!");
            redirect('login/?erro');
        }

    }

}