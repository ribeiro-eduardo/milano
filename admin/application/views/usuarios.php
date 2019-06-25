<?php $this->load->view('header.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#usuarios-table').DataTable({
			"ajax": {
            url : "<?php echo base_url("usuarios/getUsuarios") ?>",
            type : 'GET'
      },
		});
});

function novoUsuario()
{
	window.location.href = "<?php echo base_url(); ?>usuarios/form/novo";
}

function deletar(idUsuario) 
{
	if(confirm('Tem certeza que deseja excluir esse usuário?')) {
		window.location.href = "<?php echo base_url(); ?>usuarios/exclui/"+idUsuario;
	}
}
</script>

		<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-xs-8 col-lg-8">
					<div class="col-md-3 col-xs-3 col-lg-3">
						<h1>Usuários</h1>
					</div>
					<div class="col-md-3 col-xs-3 col-lg-3"></div>						
					<div class="col-md-3 col-xs-3 col-lg-3"></div>
					<div class="col-md-3 col-xs-3 col-lg-3" style="text-align: right;">
						<br>
							<button class="btn btn-success" onclick="novoUsuario()" style="text-align: right;">Novo</button>
						</span>
					</div>
					<!-- <div class="table-responsive">	 -->
						<table id="usuarios-table" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<td>Nome</td>
									<td>E-mail</td>
									<td>Usuário</td>
									<td>Cargo</td>
									<td>Fone</td>
									<td>Ações</td>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					<!-- </div> -->
    			</div>
    		</div>
    	</div>
	</div>