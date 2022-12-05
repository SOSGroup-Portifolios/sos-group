<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <?php
        require_once 'config.php';
        include(HEADER_TEMPLATE);
        ?>   
    </head>
    <body><br>
        <img class="gif" src="<?php echo BASEURL; ?>madeiras/mensagem.gif"/>
        <img class="echo" src="madeiras/fundo.png">
        <p class="um">Qualidade <br> <br> Comprometimento</p>
        <div id = "cap">
            <p id="sup">
               O vídeos a seguir são amostras efetuados pela nossa empresa.
            </p><br>
            <iframe class="mama" src="https://www.youtube.com/embed/P6yvTAo9bKo?playlist=P6yvTAo9bKo&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <iframe class="mama" src="https://www.youtube.com/embed/DalWaXKPvDc?playlist=DalWaXKPvDc&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>

            <iframe class="mama" src="https://www.youtube.com/embed/C9ZrSxnxGJg?playlist=C9ZrSxnxGJg&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p id="sup">
                Os vídeos acima mostram o seu trabalho sempre inovador de acordo com cada cliente.<br>           
            </p>
            <p id="sup">
            <a id="perfil" href="sobre.php"><img id="perfil" src="madeiras/perfil_index.png" /></a> 
            <a id="perfil1" href="sobre.php">Bruno Freitas</a>
            </p><br><br><br>
            </div>
    </body>
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
</html>