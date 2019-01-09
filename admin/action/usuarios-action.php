<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Ribeiro
 * Date: 07/04/2016
 * Time: 14:04
 */
@session_start();
if ($_SESSION["id_tipo_usuario"] != 1) {
    header("Location: index.php");
}

require_once("../lib/DBMySql.php");
require("../classe/bo/usuariosBO.php");
require("../classe/vo/usuariosVO.php");

require_once('../classe/bo/uploadBO.php');

$usuariosVO = new usuariosVO();
$usuariosBO = new usuariosBO();
$uploadBO = new uploadBO();

if(isset($_POST["cadastrar"])){

    $id_tipo_usuario = $_POST["id_tipo_usuario"];
    $nome = $_POST["nome"];
    $descricao = $_POST['descricao'];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];
    $aux = explode('/', $data_nascimento);
    $data_nascimento = $aux[2]."-".$aux[1]."-".$aux[0];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $permissao = $_POST['permissao'];
    date_default_timezone_set('America/Sao_Paulo');
    $t=time();
    $data_cadastro = @date("Y-m-d H:i:s",$t);

//validação caso passe pelo JS
    //include("../classe/validacoes/valida-usuarios.php?a=cadastrar");


    $usuariosVO->setId_tipo_usuario($id_tipo_usuario);
    $usuariosVO->setNome($nome);
    $usuariosVO->setDescricao($descricao);
    $usuariosVO->setCpf($cpf);
    $usuariosVO->setData_nascimento($data_nascimento);
    $usuariosVO->setEmail($email);
    $usuariosVO->setLogin($login);
    $usuariosVO->setSenha(md5($senha));
    $usuariosVO->setTelefone($telefone);
    $usuariosVO->setCelular($celular);
    $usuariosVO->setPermissao($permissao);
    $usuariosVO->setData_cadastro($data_cadastro);
    $usuariosVO->setStatus(1);

    if($usuariosBO->newUsuario($usuariosVO)) {
        ?>
        <script>
            alert("Usuário inserido com sucesso!");
            location.href = "../usuarios.php";
        </script>
        <?
        exit;
    }else{
        ?>
        <script>
        alert("Ocorreu um erro na gravação do usuário. Por favor, tente novamente!");
        location.href = "../usuarios.php";
        </script>
        <?
        exit;
    }
}
elseif(isset($_POST["editar"])){
    $id = $_POST["id"];
    $id_tipo_usuario = $_POST["id_tipo_usuario"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];
    $aux = explode('/', $data_nascimento);
    $data_nascimento = $aux[2]."-".$aux[1]."-".$aux[0];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $permissao = $_POST['permissao'];
    date_default_timezone_set('America/Sao_Paulo');
    $t=time();
    $data_cadastro = @date("Y-m-d H:i:s",$t);

    $usuariosVO->setId($id);
    $usuariosVO->setId_tipo_usuario($id_tipo_usuario);
    $usuariosVO->setNome($nome);
    $usuariosVO->setDescricao($descricao);
    $usuariosVO->setCpf($cpf);
    $usuariosVO->setData_nascimento($data_nascimento);
    $usuariosVO->setEmail($email);
    $usuariosVO->setLogin($login);
    if($senha != ""){
        $usuariosVO->setSenha(md5($senha));
    }
    $usuariosVO->setTelefone($telefone);
    $usuariosVO->setCelular($celular);
    $usuariosVO->setPermissao($permissao);
    $usuariosVO->setData_cadastro($data_cadastro);

    if($usuariosBO->editUsuario($usuariosVO)) {
        ?>
        <script>
            alert("Usuário alterado com sucesso!");
            location.href = "../usuarios.php";
        </script>
        <?
        exit;
    }else{
        ?>
        <script>
            alert("Ocorreu um erro na alteração do usuário. Por favor, tente novamente!");
            location.href = "../usuarios.php";
        </script>
        <?
        exit;
    }

}

if($_GET["acao"] == "e"){
    $id = $_GET["id"];
    $usuariosVO->setId($id);
    if($usuariosBO->deleteUsuario($usuariosVO)){
        ?>
        <script>
            alert("Usuário excluído com sucesso!");
            location.href = "../usuarios.php";
        </script>
        <?
        exit;
    }else{
        ?>
        <script>
            alert("Ocorreu um erro na exclusão do usuário. Por favor, tente novamente!");
            location.href = "../usuarios.php";
        </script>
        <?
        exit;
    }
}

