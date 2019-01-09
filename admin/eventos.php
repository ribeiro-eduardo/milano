<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Ribeiro
 * Date: 03/06/2016
 * Time: 00:42
 */

@session_start();
if ($_SESSION["id_tipo_usuario"] != 1) {
    header("Location: index.php");
}
include("meta.php");
include("header.php");
require("lib/DBMySql.php");

require_once("classe/bo/eventosBO.php");
require_once("classe/vo/eventosVO.php");
$eventosVO = new eventosVO();
$eventosBO = new eventosBO();

$eventos = $eventosBO->get($eventosVO);
//$aleatorio = random();
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
                        <li>Eventos</li>
                        <li class="active">Ver Todos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
  </section><!--/#Page header-->

<div class="container">
    <div class="row">
        <h1> Eventos cadastrados </h1>

        <div class="text-right">
          <a href="form-eventos.php" type="button" class="btn btn-default" style="font-weight: bold; margin: 1%">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Novo
          </a>
        </div>

        <div class="col-lg-12">

            <table border="1" class="table table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th class="col-sm-4">Data</th>
                    <th class="col-xs-1 text-center">A&ccedil;&otilde;es</th>
                </tr>
                </thead>
                <tbody>
                <? for ($i = 0; $i < count($eventos); $i++) { ?>
                    <tr>
                  <!--      <td><?= $eventos[$i]['id'] ?></td> -->
                        <td onclick="document.location = 'visualizar-evento.php?id=<?=$eventos[$i]['id']?>'; "><? echo $eventos[$i]['nome']; ?></td>
                        <td><?= $eventos[$i]['data'] ?></td>
                        <td class="text-center">
                            <a href="javascript:void(0);" onclick="visualizar(<?= $eventos[$i]['id'] ?>);"><span
                                    class="glyphicon glyphicon-edit" title="Visualizar" style="padding: 0 3%;"></span></a>
                            <a href="javascript:void(0);" onclick="excluir(<?= $eventos[$i]['id'] ?>);"><span
                                    class="glyphicon glyphicon-trash" title="Excluir"></span></a>
                        </td>
                    </tr>
                <? } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">

    function visualizar(id) {
        window.location = 'visualizar-evento.php?id=' + id;
    }

    function excluir(id) {
        if (confirm('Você tem certeza que deseja excluir esse evento?')) {
            window.location = 'action/eventos-action.php?e=' + id;
        }
    }
</script>

<?php
 include("footer.php");
?>
