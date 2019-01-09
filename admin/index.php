<?php
  include ("meta.php");
?>
  <div class="container background">
    <div class="form-signin" style="background: white">
      <h3 style="text-align: center"><img src="img/logo.jpeg" style="width: 70%">Administrativo</h3>
      <form method="POST" action="">
        <input type="text" name="usuario" placeholder="Digite o usuário" class="form-control"><br>

        <input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>
          
        <div align="center"><input type="submit" name="btnCadUsuario" value="Efetuar login" class="btn btn-success"></div>
          
        <div class="row text-center" style="margin-top: 20px;"> 
          <a href="login.php">Esqueci minha senha! </a>
        </div>
      </form>
    </div>
  </div>
