<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html>
        
    <head>
        <?php
        require_once('../config.php');
        require_once '../inc/function.php';
        index();
        /*require_once 'function.php';
        img();*/
        include(HEADER_TEMPLATE);
        $x = 0;$y = 0;
        ?>
        <script src="<?php echo BASEURL; ?>js/jquery.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>css/pags.css">
        <link href="css/hover.css" rel="stylesheet" media="all">
        <title>Galeria dos trabalhos</title>
    </head>
    <body class="mar">
            <div class="row">
                <?php
                if($imagens):
                    foreach ($imagens as $imagem):
                        if($_GET['id'] == $imagem['categoria']):
                        $x++;
                ?>
                            <a href="#img<?php echo $x;?>"><img <?php if($imagem['id_imagens'] > 32 && $imagem['id_imagens'] < 50): ?> title="Imagem meramente ilustrativa" <?php endif; ?> src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>" class="peq"></a>
                <?php
                        
                        endif;
                    endforeach;
                endif;
                ?>
            </div>
            <?php 
                if($imagens):
                    foreach ($imagens as $imagem):
                        if($_GET['id'] == $imagem['categoria']):
                         $y++; 
            ?>
            <div class="lbox" id="img<?php echo $y; ?>">
                <div class="box_img">
                    <a href="#img<?php if($y == 1)echo $x; else echo $y - 1;?>" class="btn" id="prev">&#8926;</a>
                    <a href="" class="btn" id="close">&otimes;</a>
                    <img <?php if($imagem['id_imagens'] > 32 && $imagem['id_imagens'] < 50): ?> title="Imagem meramente ilustrativa" <?php endif; ?> class="imgclass" src="<?php echo BASEURL?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>">
                    <a href="#img<?php if($y == $x)echo 1; else echo $y + 1;?>" class="btn" id="next">&cuesc;</a>
                </div>
            </div>
            <?php
                    
                    endif;
                endforeach;
            endif;
            ?>
        </body>
                <footer>
                    <?php
                    include(FOOTER_TEMPLATE);
                    ?>
                </footer>
    </html>