<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registro de Vendas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img src="..\images\logo.png" height="80" width="70">
				<nav>
					<ul>
						<br>
						<li><a href="../menu.php" >Menu</a></li>
						<li><a href="../produto/cad_produtos.php">Produtos</a></li>
						<li><a href="../vendas/reg_vendas.php" class="active">Vendas</a></li>
						<!--<li><a href="../login/logout.php"><?php if(isset($_SESSION['ds_UserName'])) echo ucwords(strtolower($_SESSION['ds_UserName'])); else echo Sair;?></a></li>-->
						<li><a href="../login/logout.php">Sair</a></li>
						
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
						    <img src="../images/vendas.png" height="70" width="70">
							<h1 class="major" >Registro de Vendas</h1>
							<p>Preencha as informações corretamente para registrar uma nova venda</p>
						
						
    			    	    <form action="validacaoVendas.php" method="POST">
                                <fieldset>
                                    
                                    <div>
                                        <?php
                                            require_once("../db.php");
                                            $query = "SELECT `ds_Produto`, `ds_Fornecedor` FROM tb_Produtos";
                                            $result = mysqli_query($conn, $query);
                                        ?>
                                        
                                        <label> Selecione um produto: </label>
                                        <select name="product" id="adefinir" autofocus="true" required>
                                            <?php while($rows = mysqli_fetch_array($result)):; ?>
                                                    <option>
                                                        <?php echo ucwords(strtolower($rows[0])) . " - " . ucwords(strtolower($rows[1])); ?>
                                                    </option>
                                            <?php endwhile;?>
                                        </select>
                                    </div><br>
                                    
                                    <div>
                                        <label> Data da Venda </label>
                                        <input type="date" name="date" id="date_venda" required ><br>
                                    </div><br>
                                    
                                    <div>
                                        <label> Cliente </label>
                                        <input type="text" id="cliente" name="nameCustomer" placeholder="Digite o nome do cliente" required />
                                    </div><br>
                        
                                    <div> 
                                        <label> Quantidade </label>
                                        <input type="number" format="currency" name="qtd" id="qtde" placeholder="Informe a qtde. vendida" required />
                                    </div><br>
                                    
                                    <div>
                                        
                                        <br><button id="sucesso" class="button" type="submit"> Salvar </button>
                                        <button class="button" type="reset"> Cancelar </button>
                                    </div>
                        
                                </fieldset>
        
                            </form>
                        </div>
						
		        </section>
		</div>
		
		<!-- Scripts -->
		   
			<script src="../public_html/assets/js/jquery.min.js"></script>
			<script src="../public_html/assets/js/jquery.scrollex.min.js"></script>
			<script src="../public_html/assets/js/jquery.scrolly.min.js"></script>
			<script src="../public_html/assets/js/browser.min.js"></script>
			<script src="../public_html/js/breakpoints.min.js"></script>
			<script src="../public_html/js/util.js"></script>
			<script src="../public_html/js/main.js"></script>

	</body>
</html>