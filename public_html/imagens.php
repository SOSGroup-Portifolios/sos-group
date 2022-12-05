<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        require_once 'config.php';
        include(HEADER_TEMPLATE);
        require_once 'inc/function.php';
        index();
        ?>
        <link rel="stylesheet" type="text/css" href="css/imagens.css">
    </head>
    <body>
    
    <!-- Imagens -->
    <br>
    <div class="cor">
        <a id="ryu" href="pagsdasimgs/img.php?id=1">
            <p>Guarda-Roupa e Closet</p>
        </a>
        <div class="row">
            <?php 
                if($imagens):
                foreach ($imagens as $imagem):
                if($imagem['id_imagens'] == 1 ||$imagem['id_imagens'] == 10):
            ?>
                    <a href="pagsdasimgs/img.php?id=1"><img class="img" src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>"></a>
            <?php 
                endif;
                endforeach;
                endif;
            ?>
        </div>
    </div>
    <br>
    <div class="cor">
        <a id="ryu" href="pagsdasimgs/img.php?id=2">
            <p>Cozinha</p>
        </a>
        <div class="row">
                <?php 
                if($imagens):
                foreach ($imagens as $imagem):
                if($imagem['id_imagens'] == 13 ||$imagem['id_imagens'] == 14):
            ?>
                    <a href="pagsdasimgs/img.php?id=2"><img class="img" src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>"></a>
            <?php 
                endif;
                endforeach;
                endif;
            ?>
        </div>
    </div>
    <br>
    <div class="cor">
        <a id="ryu" href="pagsdasimgs/img.php?id=3">
            <p>Armarios e Outros</p>
        </a>
        <div class="row">
                <?php 
                if($imagens):
                foreach ($imagens as $imagem):
                if($imagem['id_imagens'] == 29 ||$imagem['id_imagens'] == 33):
            ?>
                    <a<?php if($imagem['id_imagens'] == 33):?> title = "Imagem meramente ilustrativa" <?php endif;?>href="pagsdasimgs/img.php?id=3"><img class="img" src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>"></a>
            <?php 
                endif;
                endforeach;
                endif;
            ?>
        </div>
    </div>
    <br>
    <div class="cor">
        <a id="ryu" href="pagsdasimgs/img.php?id=4">
            <p>Estantes e Escrivaninha</p>
        </a>
        <div class="row">
                <?php 
                if($imagens):
                foreach ($imagens as $imagem):
                if($imagem['id_imagens'] == 45 ||$imagem['id_imagens'] == 50):
            ?>
                    <a href="pagsdasimgs/img.php?id=4"><img class="img" src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>"></a>
            <?php 
                endif;
                endforeach;
                endif;
            ?>
        </div>
    </div>
    <br>
    <div class="cor">
        <a id="ryu" href="pagsdasimgs/img.php?id=5">
            <p>Banheiro</p>
        </a>
        <div class="row">
                <?php 
                if($imagens):
                foreach ($imagens as $imagem):
                if($imagem['id_imagens'] == 64 ||$imagem['id_imagens'] == 65):
            ?>
                    <a href="pagsdasimgs/img.php?id=5"><img class="img" src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>"></a>
            <?php 
                endif;
                endforeach;
                endif;
            ?>
        </div>
    </div>
    <br>
    </body>
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
</html>