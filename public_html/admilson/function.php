<?php

/*if (!empty($_POST)) {
    header("Location: add.php"); exit;
}*/
$conn = mysqli_connect('localhost', 'id13767909_admin', 'Loboss@ngrentos210902', 'id13767909_personaliza') or trigger_error(mysqli_error());
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
if ($senha != $csenha){
    header("Location: add.php"); exit;
}
$sql = "INSERT INTO `usuarios` (`nome-completo`, `usuario`, `senha`, `email`, `data-cadastro`) VALUES ('".$nome."', '".$usuario."', SHA1('".$senha."'), '".$email."', NOW( ))";
$query = mysqli_query($conn, $sql);
if ($query == false){
    echo "Erro no cadastro"; exit;
}
else{
    $conn -> close();
    validacao($usuario, $senha);
}
function validacao($usuario, $senha){
$sql = NULL;
$query = NULL;
$conn = mysqli_connect('localhost', 'id13767909_admin', 'Loboss@ngrentos210902', 'id13767909_personaliza') or trigger_error(mysqli_error());

$usuario = $conn -> real_escape_string($usuario);
$senha = $conn -> real_escape_string($senha);
                
$sql = "SELECT `id_usuario`, `nome-completo`, `nivel-admin` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = mysqli_query($conn, $sql);
                
if ( mysqli_num_rows($query) != 1) {
    header("Location: index.php"); exit;
} else {
    $resultado = mysqli_fetch_assoc($query);

    if (!isset($_SESSION)) session_start();
                
    $_SESSION['UsuarioID'] = $resultado['id_usuario'];
    $_SESSION['UsuarioNome'] = $resultado['nome-completo'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel-admin'];
                
    header("Location: ../index.php"); exit;
}
}