<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/contato.css">
        <?php
        require_once 'config.php';
        include(HEADER_TEMPLATE);
        ?>
    </head>
    <body>
        <legend class="br">
            <p class="par">Fale Conosco</p>
         <a id="word" href="https://www.google.com/maps/place/R.+Benedito+Pires+de+Arruda,+Porto+Feliz+-+SP,+18540-000/@-23.1995932,-47.529606,20z/data=!4m13!1m7!3m6!1s0x94c60755652eef05:0x990827462fa643fd!2sR.+Benedito+Pires+de+Arruda,+Porto+Feliz+-+SP,+18540-000!3b1!8m2!3d-23.1995817!4d-47.5297568!3m4!1s0x94c60755652eef05:0x990827462fa643fd!8m2!3d-23.1995817!4d-47.5297568"><img class="img" src="../madeiras/google-maps.png"> R. Benedito Pires de Arruda, 96, Porto Feliz - SP, 18540-000</a><br>
        <a id="word" href="https://www.facebook.com/personalizamoveis/"><img class="img" src="../madeiras/facebook.png"> @personalizamoveis</a><br>
        <a id="word" href="https://api.whatsapp.com/send?phone=5515997261722&text=Ol%C3%A1%20Bruno"><img class="img" src="../madeiras/WhatsApp-para-PC-1-1-2.png"> 15 99726-1722</a><br>
        <a id="word" href="mailto:personaliza.moveis@hotmail.com"><img class="img" src="../madeiras/gmail1.png"> personaliza.moveis@hotmail.com</a><br>
        </legend>
    </body>
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
</html>