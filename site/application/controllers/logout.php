<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model', 'u');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->session->unset_userdata('usuario_logado');
        $this->load->view('login', array());
    }

}