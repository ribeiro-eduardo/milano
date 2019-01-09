<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Ribeiro
 * Date: 12/05/2016
 * Time: 04:15
 */
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
require_once("lib/DBMySql.php");
require("classe/bo/treinosBO.php");
require("classe/vo/treinosVO.php");

$treinosBO = new treinosBO();
$treinosVO = new treinosVO();

$datepicker = $_POST["datepicker"];
$aux = explode('/', $datepicker);
$datepicker = $aux[2]."-".$aux[1]."-".$aux[0];

$treinosVO->setData($datepicker);
$treino = $treinosBO->buscaPorData($treinosVO);

if($treino['titulo'] != "") {
    $titulo = $treino['titulo'];
}else{
    $titulo = "";
}

if($treino['descricao'] != ""){
    $descricao = $treino['descricao'];
}else{
    $descricao = "";
}

if($treino['id'] != ""){
    $id = $treino['id'];
}else{
    $id = "";
}
    echo
        '
      <div class="form-group">
         <label for="titulo">T&iacute;tulo:<span style="color: red"> *</span></label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="'.$titulo.'">
      </div>
      <div class="form-group">
         <label for="descricao">Descri&ccedil;&atilde;o:<span style="color: red"> *</span></label>
            <textarea rows="10" class="form-control" id="descricao" name="descricao">'.$descricao.'</textarea>
      </div>
      <div class="form-group">
        <input type="hidden" name="id" id="id" value="'.$id.'">
      </div>
      ';


