<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/sobre.css">
        <?php
        require_once 'config.php';
        include(HEADER_TEMPLATE);
        ?>
    </head>
    <body class="do">
    <h2 class="sea">Apresentação da minha empresa</h2>
        <p class="mar">O empresário Bruno Freitas criou sua empresa em 2009, mesmo sendo considerado "novo" no mundo dos negócios, o senhor Bruno tem atualmente a sua própria empresa, e apesar de ter alguns colaboradores, ele por vários anos trabalhou sozinho entregando a mesma qualidade de sempre.
        </p>
    <h2 class="sea">Quem é Bruno Freitas</h2>
        <p class="mar">Empresário e marceneiro, pai de família, o autônomo trabalhava em uma empresa alimentícia, e seu pai ofereceu a oportunidade de começar a trabalhar com móveis, pois o seu pai iria se aposentar, além disso, Bruno já tinha um sonho de ser um empresário de sucesso consequentemente, ele assumiu o comando da empresa do pai. A empresa abriu judicialmente nos registros de CNPJ em junho de 2010, mas o início do negócio foi em setembro de 2009.A empresa se encontra em uma oficina na rua Benedito Pires de Arruda, 96,Vila progresso – Porto Feliz/ SP.
        </p>
        <img class="r6" src="madeiras/perfil_index.png">
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
    </body>
</html>