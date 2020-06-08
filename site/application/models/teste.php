<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class imagens_model extends CI_Model {

    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function upload($dados)
    {
        // echo 'executado o método salvar';
        if ($this->db->insert('imagens', $dados)) {
            return true;
        }
        else {
            return false;
        }
    }


    function getImagens($idProjeto)
    {
        $this->db->where('id_projeto', $idProjeto);
        $arr = $this->db->get("imagens");
        foreach ($arr->result() as $row)
        {
            // $arrImagens[]['id'] = $row->id;
            // $arrImagens[]['str_nome'] = $row->str_imagem;

            $arrImagens[] = [
                'id' => $row->id,
                'str_nome' => $row->str_imagem
            ];
        }
        return $arrImagens;
    }

    function deleteImagem($idImagem)
    {
        return $this->db->delete("imagens", ["id" => $idImagem]);
    }

}