<?php $this->load->view('header.php'); ?>
<style>
    .obrigatorio {
        color: 'red' !important;
    }
</style>

		<div class="container">
            <h1>Novo usuário</h1>
        <form action="<?php echo base_url('usuarios/'.$action); ?>" method="POST">
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="hidden" name="idUsuario" value="<?= isset($usuario) ? $usuario['id'] : '' ?>">
                            <span style="color: red">* </span><label for="nome">Nome completo: </label>
                            <input type="text" name="str_nome" class="form-control" placeholder="Nome completo" required value="<?= isset($usuario) ? $usuario['str_nome'] : '' ?>">
                        </div> 
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <span style="color: red">* </span><label for="email">E-mail: </label>
                            <input type="email" name="str_email" class="form-control" placeholder="nome@email.com" required value="<?= isset($usuario) ? $usuario['str_email'] : '' ?>">
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">      
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                        <span style="color: red">* </span><label for="login">Login: </label>
                            <input type="text" name="str_login" class="form-control" placeholder="user123" required value="<?= isset($usuario) ? $usuario['str_login'] : '' ?>">
                        </div> 
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                        <span style="color: red">* </span><label for="senha">Senha: </label>
                            <input type="password" name="str_senha" class="form-control" required value="<?= isset($usuario) ? $usuario['str_senha'] : '' ?>">
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">      
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                            <span style="color: red">* </span><label for="telefone">Telefone: </label>
                                <input type="text" name="str_telefone" class="form-control" placeholder="(41) 99999-9999" required value="<?= isset($usuario) ? $usuario['str_telefone'] : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <span style="color: red">* </span><label for="cargo">Cargo: </label>
                            <input type="text" name="str_cargo" class="form-control" placeholder="Analista de Sistemas" required value="<?= isset($usuario) ? $usuario['str_cargo'] : '' ?>">
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