<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
}
// Tenta se conectar ao servidor MySQL
$conn = mysqli_connect('localhost', 'id13767909_admin', 'Loboss@ngrentos210902', 'id13767909_personaliza') or trigger_error(mysqli_error());
                
// Tenta se conectar a um banco de dados MySQL
$usuario = $conn -> real_escape_string($_POST['usuario']);
$senha = $conn -> real_escape_string($_POST['senha']);
                
// Validação do usuário/senha digitados
$sql = "SELECT `id_usuario`, `nome-completo` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') LIMIT 1";
$query = mysqli_query($conn, $sql);
                
if ( mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    ?> <p id="p">Login inválido! <br> Tente Novamente</p>
    <?php
} else {
    // Salva os dados encontrados na variável $resultado
    $resultado = mysqli_fetch_assoc($query);
                
    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();
                
    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioID'] = $resultado['id_usuario'];
    $_SESSION['UsuarioNome'] = $resultado['nome-completo'];
                
    // Redireciona o visitante
    header("Location: ../index.php"); exit;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/validacao.css">
    </head>
    <body>
        <a class="tag hvr-bounce-to-left" href="index.php">&xlArr;</a>
    </body>
</html>
