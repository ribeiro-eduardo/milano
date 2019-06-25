<?php $this->load->view('meta.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
<div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="<?php echo base_url('assets/imagens/logo.jpeg'); ?>" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form action="<?php echo base_url('login/autentica'); ?>" method="POST">
            <input type="text" id="login" class="fadeIn second" name="str_login" placeholder="Usuário" required>
            <input type="password" id="password" class="fadeIn third" name="str_senha" placeholder="Senha" required>
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
          <?php if (isset($_GET['erro'])) { ?>
                <p style="color: red">Login e/ou senha incorretos!</p>
          <?php } ?>
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Esqueceu a senha?</a>
          </div>
      
        </div>
      </div>