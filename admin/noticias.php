<?
//date_default_timezone_set('America/Sao_Paulo');
//$t=time();
//echo @date("d-m-Y H:i:s",$t);

@session_start();
if($_SESSION["id_tipo_usuario"] != 1){
    header("Location: index.php");
}
//echo $_SESSION['nome'];
$admin = false;
include('meta.php');

include("header.php");
require("lib/DBMySql.php");
require_once("classe/bo/noticiasBO.php");
require_once("classe/vo/noticiasVO.php");

$noticiasBO = new noticiasBO();
$noticiasVO = new noticiasVO();

$noticias = $noticiasBO->get($noticiasVO);
?>

<!-- page header -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <ol class="breadcrumb text-center" style="background: none; font-weight: bold; color: #5f5f5f; padding-top: 5%;">
                        <li>
                            <a href="inicio.php" style="color: #333;">
                                <i class="glyphicon glyphicon-home"></i>
                                Home
                            </a>
                        </li>
                        <li>Notícias</li>
                        <li class="active">Ver Todas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
  </section><!--/#Page header-->

<!-- Page Content -->
<div class="container">
    <div class="row">
        <h1>Not&iacute;cias cadastradas</h1>

        <div class="text-right">
          <a href="form-noticias.php" type="button" class="btn btn-default" style="font-weight: bold; margin: 1%">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Nova
          </a>
        </div>

        <div class="col-lg-12">
            <!-- Clique <a href="form-noticias.php">aqui</a> para adicionar uma nova not&iacute;cia! -->
            <table border="1" class="table table-striped">
                <thead>
                <tr>
                    <th>T&iacute;tulo da not&iacute;cia</th>
                    <th class="col-xs-1 text-center">A&ccedil;&otilde;es</th>
                </tr>
                </thead>
                <tbody>
                <form action="action/noticias-action.php" method="post">
                <? for ($i = 0; $i < count($noticias); $i++) {
                    ?>
                    <tr>
                        <td onclick="document.location = 'visualizar-noticia.php?id=<?= $noticias[$i]['id']?>'; "><? echo $noticias[$i]['titulo']; ?></td>
                        <td class="text-center">
                            <a href="javascript:void(0);" onclick="visualizar(<?= $noticias[$i]['id'] ?>);"><span
                                    class="glyphicon glyphicon-edit" title="Visualizar" style="padding: 0 3%;"></span></a>
                            <a href="javascript:void(0);" onclick="excluir(<?= $noticias[$i]['id'] ?>);"><span
                                    class="glyphicon glyphicon-trash" title="Excluir" style="padding-right: 3%;"></span></a>
                          <!--  <input type="checkbox" name="excluir[<?=$i?>]" value="<?=$noticias[$i]['id']?>"> -->
                        </td>
                    </tr>
                <? } ?>
                </form>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">

    function visualizar(id) {
        window.location = 'visualizar-noticia.php?id=' + id;
    }

    function excluir(id) {
        if (confirm('Você tem certeza que deseja excluir essa noticia?')) {
            window.location = 'action/noticias-action.php?acao_e=b&id=' + id;
        }
    }

</script>

<?php
 include("footer.php");
?>
