<?php
    if (!isset($_SESSION)) session_start();
        if (!isset($_SESSION['UsuarioID'])){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="../js/edit.js"></script>  
        <link href="css/hover.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="../css/edit.css">
        <?php
        require_once('../config.php'); 
        require_once '../inc/function.php';
        include(HEADER_TEMPLATE);
        edit();
        ?>
    </head>
    <body>
        <a id="lab1" href="index.php">&#10807;</a>
        <?php if(isset($_GET['id'])):?>
        <img class="img" src="<?php echo BASEURL;?>madeiras/<?php echo $imagem['nome']; echo $imagem['tipo'];?>">
        <form action="recebe_upload.php?id=<?php echo $_GET["id"]?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="nome" value="<?php echo $imagem['nome']; ?>">
        <?php else:?>
        <form method="post" action="recebe_upload.php" enctype="multipart/form-data">
            <label class="txt" for="classe">Escolha uma classe:</label>
            <select class="classe" name="classe">
                <?php if($_GET['c1'] < 25): ?>
                <option value="1">Guarda-Roupa e Closet</option>
                <?php endif;
                if($_GET['c2'] < 25):?>
                <option value="2">Cozinha</option>
                <?php endif;
                if($_GET['c3'] < 25):?>
                <option value="3">Armarios e Outros</option>
                <?php endif;
                if($_GET['c4'] < 25):?>
                <option value="4">Estantes e Escrivaninhas</option>
                <?php endif;
                if($_GET['c5'] < 25):?>
                <option value="5">Banheiro</option>
                <?php endif; ?>
            </select><br>
            <?php endif;?>
            <input class="lab" name="arquivo" type="file" required>
            <input class="inp" type="submit" value="Enviar Arquivo">
        </form><br>
    </body>
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
</html>
 

