<?php




require_once(DBAPI);



$imagens = null;

$imagem = null;

function index() {

	global $imagens;

	$imagens = find_all('imagens');

}
function edit() {

  if (isset($_GET['id'])) {

    $id = $_GET['id'];
    
    global $imagem;
    
    $imagem = find('imagens', $id);

  }
}
function subistitute($tipo, $nome, $classe){
    if (isset($_GET['id'])) {
         
        $id = $_GET['id'];
        sub('imagens', $id, $tipo);
    }
    else{
        add('imagens', $tipo, $nome, $classe);
    }
}