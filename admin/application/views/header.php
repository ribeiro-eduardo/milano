
<?php $this->load->view('meta.php'); ?>

		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Milano</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<img src="<?php echo base_url('assets/imagens/logo-main.png'); ?>" width="80%"></img>
			</div>
			<nav>
				<ul>
					<li>
						<a href="<?php echo base_url('usuarios') ?>">
							<span><i class="fa fa-user"></i></span>
							<span>Usuários</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('projetos') ?>">

							<span><i class="far fa-images"></i></span>
							<span>Projetos</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('logout') ?>">

							<span><i class="fas fa-sign-out-alt"></i></span>
							<span>Sair</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="main-content">
			<div class="title">
				Bem-vindo, <?php echo $_SESSION['usuario_logado']['str_nome'] ?>
			</div>