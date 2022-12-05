<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Vendas</title>
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
			    <section id="main" class="wrapper">
						<a>
                            

                            <?php
                                
                                require('../db.php');
                            
                                $Product = str_replace(" - ", "%' and  `ds_Fornecedor` like '%", $_POST['product']);
                                
                                $query = "SELECT `cd_Produto` FROM `tb_Produtos` where `ds_Produto` like '%" . $Product . "%'";
                                
                                $product = mysqli_query($conn, $query);
                                
                                $productFinal = mysqli_fetch_row($product);
                                
                                $Date = stripslashes($_POST['date']);
                                $date = mysqli_real_escape_string($conn, $Date);
                                
                                $date = date($date);
                                
                                $NameCustomer = stripslashes($_POST['nameCustomer']);
                                $nameCustomer = mysqli_real_escape_string($conn, $NameCustomer);
                                
                                $Qtd = stripslashes($_POST['qtd']);
                                $qtd = mysqli_real_escape_string($conn, $Qtd);
                                
                                $val = "SELECT `nm_VendaUnitaria` FROM `tb_Produtos` where `cd_Produto` = " . $productFinal[0];
                                
                                $result = mysqli_query($conn, $val);
                                
                                if($result){
                                    
                                    $valTotal = mysqli_fetch_array($result);
                                    
                                    $total = $valTotal[0] * $Qtd;
                                    
                                    $valorVenda = mysqli_real_escape_string($conn, $total);
                                
                                    $query = "INSERT INTO `tb_Vendas` (`cd_Produto`, `dt_Vendas`, `ds_Comprador`, `nm_Qtd`, `vl_Total`) 
                                              VALUES('". $productFinal[0] ."', '". $date ."', '". strtoupper($nameCustomer) ."', '". $qtd . "', '" . $valorVenda . "')";
                                              
                                    $result = mysqli_query($conn, $query);
                                    
                                    if ($result) {
                                        echo "<div class='form'>
                                                <label>Venda registrada com sucesso.</label><br/>
                                                <p class='link'> <a href='reg_vendas.php'>Clique aqui para registrar outra venda.</a> <br> <a href='https://app.powerbi.com/groups/325c47c0-bf61-4170-b490-7e44939c27f0/reports/c5758234-721d-4e31-bf33-12a5daec9ba2/ReportSection035a2b49d95150cdccbd?ctid=59d4f249-0520-46cf-b6b2-873d5da543fe'>Clique aqui para acessar o controle de vendas.</a><p>
                                              </div>";
                                        ob_end_flush();
                                    } else {
                                        echo "<div class='form'>
                                              <label>Informações Inválidas.</label><br/>
                                              <p class='link'>Clique <a href='reg_vendas.php'> aqui</a> para tentar Novamente.</p>
                                              </div>";
                                        ob_end_flush();
                                    }
                                }else{
                                    echo "<div class='form'>
                                          <label>Algo saiu errado</label><br/>
                                          <p class='link'><a href='reg_vendas.php'>Clique aqui para tentar Novamente.</a></p>
                                          </div>";
                                    ob_end_flush();
                                }
                            ?>
                        </a>
                </section>
            </div>    


    	<script src="../public_html/assets/js/jquery.min.js"></script>
    	<script src="../public_html/assets/js/jquery.scrollex.min.js"></script>
    	<script src="../public_html/assets/js/jquery.scrolly.min.js"></script>
    	<script src="../public_html/assets/js/browser.min.js"></script>
    	<script src="../public_html/js/breakpoints.min.js"></script>
    	<script src="../public_html/js/util.js"></script>
    	<script src="../public_html/js/main.js"></script>
</body>
</html>