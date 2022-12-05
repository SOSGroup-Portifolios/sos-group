<?php
   if (!isset($_SESSION)) session_start();
     if (!isset($_SESSION['UsuarioID'])){
     header("Location: ../index.php");
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/hover.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="../css/edit1.css">
        <?php
        require_once('../config.php');
        require_once '../inc/function.php';
        include(HEADER_TEMPLATE);
        index();
        $x = 0;$a = 0;$b = 0;$c = 0;$d = 0;$e = 0;
        ?>  
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-justify">
                    <?php
                        if($imagens):
                        foreach ($imagens as $imagem):
                        $x++;
                        if($imagem['categoria'] == 1){
                            $a++;
                        }else if($imagem['categoria'] == 2){
                            $b++;
                        }else if($imagem['categoria'] == 3){
                            $c++;
                        }else if($imagem['categoria'] == 4){
                            $d++;
                        }else{
                            $e++;
                        }
                    ?>
                    <!--<div class="col-sm">-->
                    
                    <a class="link hvr-float-shadow" href="edit.php?id=<?php echo $imagem['id_imagens']; ?>"><img class="link" src="<?php echo BASEURL;?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>" ></a>
                    <!--</div>-->
                    
                    <?php
                        endforeach;
                        endif;
                    ?>
                    
                </div><br>
                <?php if($x < 125): ?>
                <a  href="edit.php?c1=<?php echo $a; ?>&c2=<?php echo $b; ?>&c3=<?php echo $c; ?>&c4=<?php echo $d; ?>&c5=<?php echo $e; ?>" id="f1">Adicionar imagem</a><br>
                <?php endif; ?>
            </div>
        </div>
    </body>
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
</html>