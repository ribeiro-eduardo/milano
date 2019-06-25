<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class projetos_model extends CI_Model {

    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function novo($dados)
    {
        // echo 'executado o método salvar';
        if ($this->db->insert('projetos', $dados)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function altera($idProjeto, $dados)
    {
        $this->db->where('id', $idProjeto);
        if ($this->db->update('projetos', $dados)) {
            return true;
        }
    }

    public function deleteProjeto($idProjeto)
    {
        return $this->db->delete("projetos", ["id" => $idProjeto]);
    }

    function getProjetos($idProjeto = '')
    {
        if ($idProjeto != '') {
            $this->db->where('id', $idProjeto);
            $qry = $this->db->get('projetos'); 
            return $qry->row();
        }
        else {
            return $this->db->get("projetos");
        }
        
    }

}