<?php if (!isset($_SESSION)) session_start();?>
<?php
    ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Registration</title>
        <link rel="stylesheet" href="../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    
    </head>
<body class="is-preload">
<?php
    require('../db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['username'])) {
        // removes backslashes
        //echo mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        
        $Password = stripslashes($_POST['senha']);
        $password = mysqli_real_escape_string($conn, $Password);
        
        $Email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($conn, $Email);
        
        $query = "SELECT * FROM `tb_Login` WHERE `ds_UserName` = '".strtoupper($username)."' and (`ds_Email` = '".$email."' or `ds_Password` = '".MD5($password)."')";
        
        //echo $cdLogin . " retorno da query<br>";
        
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        
        if($rows >= 1){
            echo "<div class='inner'>
                      <label>Você já possui uma conta com esses dados.</label><br/>
                      <p class='link'>Clique <a href='cadastrar.php'>aqui</a> para cadastrar um usuário válido </p></div>";
            ob_end_flush();
        }else{
            
            $query = "INSERT INTO `tb_Login` (`ds_UserName`, `ds_Password`, `ds_Email`, `dt_Registration`) 
                      VALUES('". strtoupper($username) ."', '". MD5($password)."', '".$email."', NOW())";    
            
            $result = mysqli_query($conn, $query);
        
            if ($result) {
                echo " 
                      <div class='inner'>
                        <br><label>Cadastro realizado com sucesso!</label><br/>
                            <p class='link'>Clique <a href='../index.php'>aqui</a> para fazer login<p> 
                      </div>";
                ob_end_flush();
            } else {
                echo "<div class='inner'>
                      <label>Existem campos obrigatórios que não foram preenchidos.</label><br/>
                      <p class='link'>Clique <a href='cadastrar.php'>aqui</a> para tentar novamente  </p>
                      </div>";
                ob_end_flush();
            }
        }
    } else {
?>
    <!-- Header -->
	<header id="header">
		<a class="title">Sales BI</a>
			<nav>
				<ul>
					<li><a href="../index.php" class="active">Voltar ao inicio</a></li>
				</ul>
			</nav>
		</header>
    <!-- Wrapper -->
	<div id="wrapper">

	<!-- Main -->
		<section id="main" class="wrapper">
			<div class="inner">
				
                <form class="form" action="" method="post">
                    <h1 class="login-title">Cadastrar nova Conta</h1>
                    <input type="text" class="login-input" name="username" placeholder="Nome do Usuário" maxlength="50" autofocus="true" required /><br>
                    
                    <br><input type="text" class="login-input" name="email" placeholder="Email" maxlength="50" /><br>
                    <br><input type="password" class="login-input" name="senha" placeholder="Senha" maxlength="50" /><br>
                    
                    <br><input type="submit" name="submit" value="Cadastrar" class="login-button" /><br>
                   <br><p class="link">Já jem conta?<a href="../index.php"> Entrar na Conta</a></p><br>
                </form>
            </div>
        </section>
    </div>
<?php
    }
?>

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