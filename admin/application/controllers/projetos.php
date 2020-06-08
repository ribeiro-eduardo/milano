<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetos extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Projetos_model', 'p1');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('projetos', array());
    }

    public function teste()
    {
        die("oioioi");
    }

    public function form()
    {    
        if ($this->uri->segment(3) == 'novo') {
            $dados['action'] = 'novo';
            $this->load->view('projetos_form', $dados);
        } 
        else if ($this->uri->segment(3) == 'altera') {
            $idProjeto = $this->uri->segment(4);
            $projeto = $this->p1->getProjetos($idProjeto);
            
            $dados['projeto']['id'] = $projeto->id;
            $dados['projeto']['str_nome'] = $projeto->str_nome;
            $dados['projeto']['str_desc'] = $projeto->str_desc;
            $dados['projeto']['id_categoria'] = $projeto->id_categoria;
            $dados['action']  = 'altera';
            
            $this->load->view('projetos_form', $dados);
        }
            
    }

    public function novo()
    {
        $arr['str_nome'] = $_POST['str_nome'];
        $arr['str_desc'] = $_POST['str_desc'];
        $arr['id_categoria'] = $_POST['id_categoria'];
        
        if ($this->p1->novo($arr)) {
            // mkdir("../../../projetos/".$this->db->insert_id());
            // die(DIRPROJ.'/'.$this->db->insert_id());
            $path = DIRPROJ.'/'.$this->db->insert_id();
            mkdir($path, 0777, TRUE);
            redirect('projetos', 'refresh');
        }
    }

    public function altera()
    {
        $idProjeto = $_POST['idProjeto'];
        $arr['str_nome'] = $_POST['str_nome'];
        $arr['str_desc'] = $_POST['str_desc'];
        $arr['id_categoria'] = $_POST['id_categoria'];

        if ($this->p1->altera($idProjeto, $arr)) {
            redirect('projetos', 'refresh');
        }
    }

    public function imagens()
    {
        $idProjeto = $this->uri->segment(3);
        $arrProjeto = $this->p1->getProjetos($idProjeto);
        // $nomeProjeto = $arrProjeto->result()->str_nome;
        // var_dump($arrProjeto->result());
        $nomeProjeto = $arrProjeto->str_nome;
        $this->load->model('Imagens_model', 'i');
        $arrImagens = $this->i->getImagens($idProjeto);
        if (!empty($arrImagens->result())) {
            foreach($arrImagens->result() as $r) {
                $imagens[] = ['str_imagem' => $r->str_imagem, 'id' => $r->id, 'id_projeto' => $r->id_projeto, 'str_capa' => $r->str_capa];
            }
            $dados['imagens'] = $imagens;
        }
        else {
            $dados = [];
        }
        $dados['nomeProjeto'] = $nomeProjeto;
        $this->load->view('imagens_form', $dados);
    }

    public function exclui()
    {
        $idProjeto = $this->uri->segment(3);
        if ($this->p1->deleteProjeto($idProjeto)) {
            $this->load->view('projetos');
        }
    }

    public function getProjetos()
    {
        $draw     = intval($this->input->get("draw"));
        $start    = intval($this->input->get("start"));
        $length   = intval($this->input->get("length"));
        $projetos = $this->p1->getProjetos();

        $data = array();

        foreach($projetos->result() as $r) {

            $linkAltera  = anchor('projetos/form/altera/'.$r->id, '<i class="fas fa-edit"></i>');
            $linkExclui  = '<a onclick="deletar('.$r->id.')"><i class="fas fa-trash-alt"></i></a>';
            $linkImagens = anchor('projetos/imagens/'.$r->id, '<i class="fas fa-images"></i>');

            $data[] = array($r->str_nome,
                            $r->str_desc,
                            $r->id_categoria,
                            $linkAltera.' '.$linkImagens.' '.$linkExclui);
        }

        $output = array("draw"            => $draw,
                        "recordsTotal"    => $projetos->num_rows(),
                        "recordsFiltered" => $projetos->num_rows(),
                        "data"            => $data);
          
        echo json_encode($output);

        exit();
    }
}
