<?php $this->load->view('header.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#projetos-table').DataTable({
			"ajax": {
            url : "<?php echo base_url("projetos/getProjetos") ?>",
            type : 'GET'
      },
		});
});

function novoProjeto()
{
	window.location.href = "<?php echo base_url(); ?>projetos/form/novo";
}

function deletar(idProjeto) 
{
	if(confirm('Tem certeza que deseja excluir esse projeto?')) {
		window.location.href = "<?php echo base_url(); ?>projetos/exclui/"+idProjeto;
	}
}
</script>

		<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-xs-8 col-lg-8">
					<div class="col-md-3 col-xs-3 col-lg-3">
						<h1>Projeto</h1>
					</div>
					<div class="col-md-3 col-xs-3 col-lg-3"></div>						
					<div class="col-md-3 col-xs-3 col-lg-3"></div>
					<div class="col-md-3 col-xs-3 col-lg-3" style="text-align: right;">
						<br>
							<button class="btn btn-success" onclick="novoProjeto()" style="text-align: right;">Novo</button>
						</span>
					</div>
					<!-- <div class="table-responsive">	 -->
						<table id="projetos-table" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<td>Nome</td>
									<td>Descrição</td>
									<td>Categoria</td>
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