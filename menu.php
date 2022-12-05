<?php if (!isset($_SESSION)) session_start();?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Menu</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img src="images\logo.png" height="80" width="70">
				<!--<a class="title"  >Sales BI</a>-->
				<nav>
					<ul>
						<br>
						<li><a href="menu.php" class="active">Menu</a></li>
						<li><a href="login/logout.php">Sair</a></li>
						
						<li>
                            <a href="#" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <?php if(isset($_SESSION['ds_UserName'])) echo ucwords(strtolower($_SESSION['ds_UserName'])); else echo "Sair";?>
                            </a>
                        </li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
						    <h2>Sales B.I</h2><br/>
							
							<h1 class="major">Bem vindo(a) <?php if(isset($_SESSION['ds_UserName'])) echo ucwords(strtolower($_SESSION['ds_UserName']));?>!</h1>
							<span class="image fit"><img src="images/pic04.jpg" alt="" /></span>
							<h2>Seu universo de vendas! Cadastre seus produtos, registre suas vendas e 
							visualize os mais importantes insights para tomar decisões em seu negócio.</h2><br/>
						
    						<div class="inner" align="center">
            					 <img src="images\product.png" height="100" width="100" >
            					 <h3> Cadastro de Produtos </h3>
            					 <p>Clique para incluir novos produtos</p>
            					 <ul class="actions">
    							    <li><a href="/produto/cad_produtos.php" class="button" align="center">Cadastrar</a></li>
    						    </ul>
            			    </div>
            			    
            			    <div class="inner2" align="center">
            					 <img src="images\vendas.png" height="100" width="100">
            					 <h3> Registro de Vendas </h3>
            					 <p >Acesse para registrar novas vendas</p>
            					 <ul class="actions">
    							    <li><a href="/vendas/reg_vendas.php" class="button" align="center">Registrar</a></li>
    						    </ul>
            			    </div>
            			    
            			    <div class="inner3" align="center">
            					 <img src="images\dashboard.png" height="100" width="100">
            					 <h3> Relatório de Vendas </h3>
            					 <p >Acesse seus indicadores</p>
            					 <ul class="actions">
    							    <li><a href="https://app.powerbi.com/links/87X_JSotKW?ctid=59d4f249-0520-46cf-b6b2-873d5da543fe&pbi_source=linkShare" class="button" align="center">Acessar</a></li>
    						    </ul>
            			    </div>
        			    </div>
					</section>
					

			
		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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