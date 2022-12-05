<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <?php
        require_once '../config.php';
        include(HEADER_TEMPLATE);
        if (isset($_SESSION)) session_destroy();
        ?>
    </head>
    <body class="mar">
        <!-- Formulário de Login -->
            <form action="validacao.php" method="post">
                <fieldset>
                    <legend class="leng">Dados de Login</legend>
                        <label class="lab" for="txUsuario">Usuário </label><br>
                            <div class="lab"><input id="inp" type="text" name="usuario" id="txUsuario" maxlength="25" /></div><br>
                        <label class="lab" for="txSenha">Senha </label><br>
                            <div class="lab"><input id="inp" type="password" name="senha" id="txSenha"  maxlength="25" /></div><br>
                            <input id="sub" type="submit" value="Entrar" />
                </fieldset>
            </form>
        </body>
    <footer>
        <?php
        include(FOOTER_TEMPLATE);
        ?>
    </footer>
</html>