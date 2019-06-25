<?php $this->load->view('header.php'); ?>
<style>
    .obrigatorio {
        color: 'red' !important;
    }
</style>

		<div class="container">
            <h1>Novo projeto</h1>
        <form action="<?php echo base_url('projetos/'.$action); ?>" method="POST">
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="hidden" name="idProjeto" value="<?= isset($projeto) ? $projeto['id'] : '' ?>">
                            <span style="color: red">* </span><label for="nome">Nome do projeto: </label>
                            <input type="text" name="str_nome" class="form-control" placeholder="Reforma completa" required value="<?= isset($projeto) ? $projeto['str_nome'] : '' ?>">
                        </div> 
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <span style="color: red">* </span><label for="descricao">Descrição: </label>
                            <input type="text" name="str_desc" class="form-control" placeholder="Reforma feita em São José dos Pinhais" required value="<?= isset($projeto) ? $projeto['str_desc'] : '' ?>">
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">      
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                        <span style="color: red">* </span><label for="categoria">Categoria: </label>
                            <input type="text" name="id_categoria" class="form-control" placeholder="user123" required value="<?= isset($projeto) ? $projeto['id_categoria'] : '' ?>">
                        </div> 
                    </div>
                </div>
            </div>
            
            <div class="row">
            <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>     
            </div> 
        </form>
        </div>
</div>