<?php if (!isset($_SESSION)) session_start();?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cadastro de Produtos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<i class="bi bi-person-circle"></i>
		<i class="bi bi-box-arrow-right"></i>
	</head>
	
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img href="../menu.php" src="../images/logo.png" height="80" width="70">
				<br>
				<nav>
					<ul>
						<br>
						<li><a href="../menu.php" >Menu</a></li>
						<li><a href="../produto/cad_produtos.php" class="active">Produtos</a></li>
						<li><a href="../vendas/reg_vendas.php" >Vendas</a></li>

						<li><a href="../login/logout.php">Sair
						    
						    </a></li>
                        
                        <li>
                            <a href="#" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <?php if(isset($_SESSION['ds_UserName'])) echo ucwords(strtolower($_SESSION['ds_UserName'])); else echo "Sair";?>
                            </a>
                        </li>
                        
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<img src="../images/product.png" height="70" width="70">
							<h1 class="major" >Cadastro de Produtos</h1>
							<p>Preencha as informações corretamente para cadastrar um produto novo:</p>
						
						
    			    	    <form action="validacaoProduto.php" method="post">
                                <fieldset>
                     
                                    <div>
                                        <label> Descrição do Produto </label>
                                        <input name = "describe" type="text" id="produto" placeholder="Descreva o produto..." autofocus="true" required/>
                                    </div><br>
                                    
                                    <div>
                                        <label> Descrição do Fornecedor </label>
                                        <input name = "fornecedor" type="text" id="fornecedor" placeholder="Digite o nome do fornecedor" required/>
                                    </div><br>
                        
                                    <div> 
                                        <label> Preço de custo unitario </label>
                                        <input name = "coust" type="number" step=".01" format="currency" id="custo" placeholder="Informe o custo..." required />
                                    </div><br>
                                    
                                    <div> 
                                        <label> Preço de venda unitario </label>
                                        <input name = "sale" type="number" step=".01" format="currency" id="venda" placeholder="Informe o valor de venda" required/>
                                    </div><br>
                                    
                                    
                                    <div> 
                                        <br>
                                        <button onclick="sucesso()" class="button" type="submit"> Salvar </button>
                                        <button class="button" type="reset"> Cancelar </button>
                                    </div>
                        
                                </fieldset>
        
                            </form>
                        </div>
					</section>
		    </div>

		<!-- Scripts -->
		
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/browser.min.js"></script>
            <script src="../assets/js/breakpoints.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
            
        
	</body>
</html>