<?php if (!isset($_SESSION)) session_start();?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Sales BI</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Sidebar -->
	<section id="sidebar">

		<div class="inner">
		    <img src="images\logo.png" height="80" width="70" align="center">
		    <br>

			<nav>
			    
				<ul>
					<li><a href="#intro">Inicio</a></li>
					<li><a href="#one">Login</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<!-- Wrapper -->
	<div id="wrapper">
       
		<!-- Intro -->
		<section id="intro" class="wrapper style1 fullscreen fade-up">
			<div class="inner">
				<h1>Sales B.I</h1>
				<p>Bem-vindo(a) a SALES B.I o seu sistema de vendas!<br />
				</p>
				
				<ul class="actions">
					<li><a href="#one" class="button scrolly">Fazer login</a></li>
				</ul>
			</div>
		</section>

		<!-- One -->
		<form id="one" class="wrapper style2 spotlights" action="login/validarLogin.php" method="post">
			<section>
				<!--<a href="#" class="image"><img src="..." alt=""-->
				<!--		data-position="center" /></a>-->
				<div class="content">
				    <div class="col-sm-10	">
				        <h2>Faça seu login</h2>
						
						<fieldset class=" type-email">
						    <h3>E-mail ou Nome do Usuário</h3> 
						    <input type="email" class="form-control form-control-sm" name="email" id="login" placeholder="Seu e-mail">

						</fieldset>

						<fieldset class=" type-password">
							<br><h3>Senha</h3>
							<input type="password" name="password" id="senha" placeholder="Sua senha">
							
						</fieldset><br>
						
						
						
						<!--<div class="flex-container flex-item flex-align-right">
								<br> <p><a href="recuperar-senha"><u>Esqueci minha senha</u></a></p>
						</div>-->
						<p class="link">Não tem conta ainda? <a href="login/cadastrar.php">Cadastre-se</a></p>
						<ul  class="actions">
							<!--<li><a class="button" href="menu.php">Entrar sem Usuario</a></li>-->
							
                            <li><input type="submit" name="submit" value="Entrar" class="login-button" /></li>
						</ul>
					</div>
				</div>
				
			</section>

		</form>
    </div>
	<!-- Footer -->
	<footer id="footer" class="wrapper style1-alt">
		<div class="inner">
			<ul class="menu">
				<li>Sales BI - E-mail de contato: sosgroupportifoliosimplificado@gmail.com</li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>