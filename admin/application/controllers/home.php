<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'l1');
        $this->load->helper('url');
    }

    public function index()
    {
        if(!isset($_SESSION['usuario_logado'])) {
            redirect('login', 'refresh');
        }

        $arq = "contador.txt";
        $handle = fopen($arq, 'r+');
        $data = fread($handle, 512);
        $contador = $data + 1;
        fseek($handle, 0);
        fwrite($handle, $contador);
        fclose($handle);
        // $arr['id'] = $this->uri->segment(3);
        // echo $id;
        $arr['contador'] = $contador;
        $this->load->view('home', $arr);
        // echo "Hello World";
        // $this->l1->salvar();
    }
}