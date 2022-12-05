<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/recebe.css">
    </head>
    <body>
        <a class="f3 hvr-bounce-to-left" href="index.php">&xlArr;</a><br><br><br><br>
    </body>
</html>

<?php
require_once('../config.php');
require_once('../inc/function.php');
 
// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '../madeiras/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 5000000; // 5Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('.jpeg', '.jpg', '.png');
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$x = explode('.',$_FILES['arquivo']['name']);
$tipo = strrchr($_FILES['arquivo']['name'],'.');
$arquivoPermitido = false;
 for($i=0;$i<count($_UP['extensoes']);$i++)
 {
 if($_UP['extensoes'][$i] == $tipo)
 {
 $arquivoPermitido=true;
 }
 }
if($arquivoPermitido==false)
{
echo "<a class='f2'>Por favor, envie arquivos com as seguintes extensões: jpeg, jpg ou png.</a>";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if (isset($_GET['id'])) {
$nome_final = $_POST['nome'];
$classe = null;
} else {
$nome_final = $x[0];
$classe = $_POST['classe'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final . $tipo)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "<a class='f5'>Upload efetuado com sucesso!</a>";
echo '<br /><a class="f4 hvr-shutter-out-horizontal" href="' . $_UP['pasta'] . $nome_final . $tipo . '">Clique aqui para acessar o arquivo</a>';
subistitute($tipo, $nome_final, $classe);
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "<a class='f2'>Não foi possível enviar o arquivo, tente novamente</a>";
}
 
}

?>