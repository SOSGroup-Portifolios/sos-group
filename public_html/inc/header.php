<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>css/heater-teste.css">
        <script src="<?php echo BASEURL; ?>js/jquery.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="sortcut icon" href="<?php echo BASEURL; ?>madeiras/logo4.png" type="image/x-icon" />
        <title>Personaliza Moveis</title>
    </head>
    <body>
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>
        <!--<p id="info">Localização: Benedito Pires de Arruda,<br> 96,Vila progresso – Porto Feliz/ SP.</p>-->
        <!--<div id="dig">-->
        <!--<a href="https://www.facebook.com/personalizamoveis/"><img src="../madeiras/facebook.png" id="face"></a>-->
        <!--<a href="https://api.whatsapp.com/send?phone=5515997261722&text=Ol%C3%A1%20Bruno"><img src="../madeiras/WhatsApp-para-PC-1-1-2.png" id="whats"></a>-->
        <!--<a href="mailto:personaliza.moveis@hotmail.com"><img src="../madeiras/gmail.png" id="gmail"></a>-->
        </div>
        <nav class="menu">
            <ul>
                <div class="row">
                    <!--<div class="col">-->
                    <!--</div>-->
                    <div class="col">
                        <li><a id="ph" href="<?php echo BASEURL ?>index.php"><img class="<?php if(!isset($_SESSION['UsuarioID'])) echo "log"; else echo "loglog"?>" src="<?php echo BASEURL; ?>madeiras/logo3.png"></a></li>
                    </div>
                        <!--<li><a href="<?php echo BASEURL ?>index.php">Início</a></li>-->
                    <div class="col">
                        <li><a href="<?php echo BASEURL ?>sobre.php" class="<?php if(!isset($_SESSION['UsuarioID'])) echo "fack"; else echo "loglog1"?>">Sobre</a></li>
                    </div>
                    <div class="col">
                        <li><a href="<?php echo BASEURL ?>imagens.php" class="<?php if(!isset($_SESSION['UsuarioID'])) echo "fack"; else echo "loglog1"?>">Trabalho</a>
                            <ul>
                                <li><a href="<?php echo BASEURL ?>pagsdasimgs/img.php?id=1">Guarda-Roupa e Closet</a></li>
                                <li><a href="<?php echo BASEURL ?>pagsdasimgs/img.php?id=2">Cozinha</a></li>
                                <li><a href="<?php echo BASEURL ?>pagsdasimgs/img.php?id=3">Armários e Outros</a></li>
                                <li><a href="<?php echo BASEURL ?>pagsdasimgs/img.php?id=4">Estantes e Escrivaninhas</a></li>
                                <li><a href="<?php echo BASEURL ?>pagsdasimgs/img.php?id=5">Banheiro</a></li>
                            </ul>
                        </li>
                    </div>
                    <div class="col">
                        <li><a href="<?php echo BASEURL ?>contato.php" class="<?php if(!isset($_SESSION['UsuarioID'])) echo "fack"; else echo "loglog1"?>">Contatos</a></li>
                    </div>
                <?php
                if (isset($_SESSION['UsuarioID'])):
                ?>
                    <div class="col">
                        <li><a href="<?php echo BASEURL ?>upload/index.php" class="<?php if(!isset($_SESSION['UsuarioID'])) echo "fack"; else echo "loglog1"?>">Troca de Imagens</a></li>
                    </div>
                    <div class="col">
                        <li><a id="potato"><?php echo $_SESSION['UsuarioNome'];?></a>
                            <ul>
                                <li><a href="<?php echo BASEURL ?>admilson/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </div>
                <?php
                endif;
                ?>
                </div>
            </ul>
        </nav>
        <!--<img class="gif" src="<?php echo BASEURL; ?>madeiras/mensagem.gif"/>-->
    </body>
</html>

