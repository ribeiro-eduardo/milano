<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function salvar()
    {
        echo 'executado o método salvar';
    }
}