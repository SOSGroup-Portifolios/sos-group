

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Cadastro</title>
        <link rel="stylesheet" href="../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    
    </head>
<body class="is-preload">
    
    <header id="header">
				<img src="..\images\logo.png" height="80" width="70">
				<nav>
					<ul>
						<br>
						<li><a href="../login/logout.php">Sair</a></li>
						
					</ul>
				</nav>
			</header>
			
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<a>
                            <?php
                            
                            
                                require('../db.php');
                            
                                $Describe = stripslashes($_POST['describe']);
                                $describe = mysqli_real_escape_string($conn, $Describe);
                                
                                $Fornecedor = stripslashes($_POST['fornecedor']);
                                $fornecedor = mysqli_real_escape_string($conn, $Fornecedor);
                                
                                $Coust = stripslashes($_POST['coust']);
                                $coust = mysqli_real_escape_string($conn, $Coust);
                                
                                $Sale = stripslashes($_POST['sale']);
                                $sale = mysqli_real_escape_string($conn, $Sale);
                                
                                $query = "SELECT `ds_Produto` FROM `tb_Produtos` WHERE `ds_Produto` = '".strtoupper($decribe)."'";
                                
                                $result = mysqli_query($conn, $query);
                                $rows = mysqli_num_rows($result);
                                
                                if($rows >= 1){
                                    echo "<div class='title' >
                                              <label>Descrição não pode ser igual.</label><br/>
                                              <p class='link'>Clique <a href='cad_produtos.php'> para cadastrar o produto novamente.</a></p></div>";
                                    ob_end_flush();
                                }else{
                                    
                                    $query = "INSERT INTO `tb_Produtos` (`ds_Produto`, `ds_Fornecedor`, `nm_CustoUnitario`, `nm_VendaUnitaria`) 
                                              VALUES('". strtoupper($describe) ."', '". strtoupper($fornecedor) ."', '". $coust ."', '". $sale ."')";
                                    
                                    $result = mysqli_query($conn, $query);
                                
                                    if ($result) {
                                        echo "<div class='form'>
                                                <label>Produto cadastrado com sucesso!</label><br/>
                                                <p class='link'>Clique <a href='cad_produtos.php'>aqui</a> para registrar outro produto ou, <br> Para acessar o cadastro de produtos clique <a href='https://app.powerbi.com/groups/325c47c0-bf61-4170-b490-7e44939c27f0/reports/c5758234-721d-4e31-bf33-12a5daec9ba2/ReportSection7490091262de6097b20a?ctid=59d4f249-0520-46cf-b6b2-873d5da543fe'>aqui.</a><p>
                                              </div>";
                                        ob_end_flush();
                                    } else {
                                        echo "<div class='form'>
                                              <label>Informações Inválidas.</label><br/>
                                              <p class='link'>Clique <a href='cad_produtos.php'>aqui</a>para tentar novamente.</p>
                                              </div>";
                                        ob_end_flush();
                                    }
                                }
                            ?>
                        </a>
                    </section>

    	<script src="../public_html/assets/js/jquery.min.js"></script>
    	<script src="../public_html/assets/js/jquery.scrollex.min.js"></script>
    	<script src="../public_html/assets/js/jquery.scrolly.min.js"></script>
    	<script src="../public_html/assets/js/browser.min.js"></script>
    	<script src="../public_html/js/breakpoints.min.js"></script>
    	<script src="../public_html/js/util.js"></script>
    	<script src="../public_html/js/main.js"></script>
</body>
</html>