<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {

    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function login($str_login, $str_senha)
    {
        $this->db->where("str_login", $str_login);
        $this->db->where("str_senha", $str_senha);

        $usuario = $this->db->get("usuarios")->row_array();
        // print_r($this->db->last_query());    
        return $usuario;
    }

    public function novo($dados)
    {
        // echo 'executado o método salvar';
        if ($this->db->insert('usuarios', $dados)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function altera($idUsuario, $dados)
    {
        $this->db->where('id', $idUsuario);
        if ($this->db->update('usuarios', $dados)) {
            return true;
        }
    }

    public function getUsuarios()
    {
        return $this->db->get("usuarios");
    }

    public function getUsuarioById($idUsuario)
    {
        $this->db->where("id", $idUsuario);
        return $this->db->get("usuarios")->row_array();
    }

    public function deleteUsuario($idUsuario) 
    {
        return $this->db->delete("usuarios", ["id" => $idUsuario]);
    }
}