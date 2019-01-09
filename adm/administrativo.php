<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao/conexao.php");
	seguranca_adm();
	include('header.php');
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
		<h1>Usuários</h1><button id="btnAdd" class="btn btn-success" onclick="addUsuario()">Novo</button>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table" id="usuariosGrid">
				<thead>
					<tr>
						<th style="width: 5%">ID</th>
						<th>Nome</th>
						<th>Nivel de acesso</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Cesar Szpak</td>
						<td>Administrador</td>
						<td>
							<button type="button" class="btn btn-xs btn-warning">Editar</button>
							<button type="button" class="btn btn-xs btn-danger">Apagar</button>
						</td>
					</tr>              
				</tbody>
			</table>
		</div>
	</div>
</div>

    
<script src="js/administrativo.js"></script>
  

