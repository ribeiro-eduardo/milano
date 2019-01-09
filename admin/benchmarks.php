<?
@session_start();
if($_SESSION["id_tipo_usuario"] != 1){
    header("Location: index.php");
}

$admin = false;
include('meta.php');

include("header.php");
require("lib/DBMySql.php");
require_once("classe/bo/benchmarksBO.php");
require_once("classe/vo/benchmarksVO.php");

$benchmarksBO = new benchmarksBO();
$benchmarksVO = new benchmarksVO();

$filtro = $_GET["filtro"];

switch ($filtro) {
    case "heroes":
        $benchmarksVO->setIdCategoriaTreino(1);
        break;
    case "girls":
        $benchmarksVO->setIdCategoriaTreino(2);
        break;
    case "challenges":
        $benchmarksVO->setIdCategoriaTreino(3);
        break;
}

$benchmarks = $benchmarksBO->get($benchmarksVO);
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
                        <li>Benchmarks</li>
                        <li class="active">Ver Todos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
  </section><!--/#Page header-->

<!-- Page Content -->
<div class="container">
    <div class="row">
        <h1>Benchmarks cadastrados</h1>

        <section>
          <div class="col-sm-4">
            <div class="form-group">
                  <label for="celular">Filtrar por categoria de treino:</label>
                  <select class="form-control" id="filtro" name="filtro" onchange="filtrar()">
                      <option value="Todos" <? if ($filtro == "") echo "selected"; ?>>Todos</option>
                      <option value="Heroes" <? if ($filtro == "heroes") echo "selected"; ?>>
                          Heroes
                      </option>
                      <option value="Girls" <? if ($filtro == "girls") echo "selected"; ?>>Girls</option>
                      <option value="Challenges" <? if ($filtro == "challenges") echo "selected"; ?>>Challenges</option>
                  </select>
              </div>
          </div>

          <div class="col-sm-8 text-right">
            <a href="form-benchmarks.php" type="button" class="btn btn-default" style="font-weight: bold">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              Novo
            </a>
          </div>
        </section>

        <div class="col-lg-12">

          <!--   Clique <a href="form-benchmarks.php">aqui</a> para adicionar um novo benchmark! -->
            <table border="1" class="table table-striped">
                <thead>
                <tr>
                    <th>Nome do treino</th>
                    <th class="col-sm-3">Categoria</th>
                    <th class="col-xs-1 text-center">A&ccedil;&otilde;es</th>
                </tr>
                </thead>
                <tbody>
                <? for ($i = 0; $i < count($benchmarks); $i++) {
                    ?>
                    <tr>
                      <!--  <td><?= $benchmarks[$i]['id'] ?></td> -->
                        <td onclick="document.location = 'visualizar-benchmark.php?id=<?= $benchmarks[$i]['id']?>'; "><? echo $benchmarks[$i]['titulo']; ?></td>
                        <td>
                            <?
                            switch ($benchmarks[$i]['id_categoria_treino']) {
                                case 1:
                                    echo "Heroes";
                                    break;
                                case 2:
                                    echo "Girls";
                                    break;
                                case 3:
                                    echo "Challenges";
                                    break;
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <a href="javascript:void(0);" onclick="visualizar(<?= $benchmarks[$i]['id'] ?>);"><span
                                    class="glyphicon glyphicon-edit" title="Visualizar" style="padding: 0 3%;"></span></a>
                            <a href="javascript:void(0);" onclick="excluir(<?= $benchmarks[$i]['id'] ?>);"><span
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
        window.location = 'visualizar-benchmark.php?id=' + id;
    }

    function excluir(id) {
        if (confirm('Voc� tem certeza que deseja excluir esse benchmark?')) {
            window.location = 'action/benchmark-action.php?excluir=' + id;
        }
    }

    function filtrar() {
        var x = document.getElementById("filtro").value;
        if (x == "Heroes") {
            window.location = "benchmarks.php?filtro=heroes";
        } else if (x == "Girls") {
            window.location = "benchmarks.php?filtro=girls";
        } else if (x == "Challenges") {
            window.location = "benchmarks.php?filtro=challenges";
        }
        else if (x == "Todos") {
            window.location = "benchmarks.php";
        }
    }

</script>

<?php
 include("footer.php");
?>
