<?php



mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {

	try {

		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		return $conn;

	} catch (Exception $e) {

		echo $e->getMessage();

		return null;

	}

}



function close_database($conn) {

	try {

		mysqli_close($conn);

	} catch (Exception $e) {

		echo $e->getMessage();

	}

}

function find( $table = null, $id = null) {
	$database = open_database();

	$found = null;

	try {
	  if ($id) {
	    $sql = "SELECT * FROM `" . $table . "` WHERE `id_imagens` = " . $id;

	    $result = mysqli_query($database, $sql);

	    if (mysqli_num_rows($result) > 0) {
	      $found = $result->fetch_assoc();
	    }
	  } else {
	    $sql = "SELECT * FROM " . $table;

	    $result = mysqli_query($database, $sql);

	    if (mysqli_num_rows($result) > 0) {
	      $found = $result->fetch_all(MYSQLI_ASSOC);
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();

	  $_SESSION['type'] = 'danger';
  }
	close_database($database);

	return $found;
} 

function find_all( $table ) {	
  
		return find($table);
	
}	
function sub($table = null, $id = null, $tipo = null){
    $database = open_database();
    
    $sql = "UPDATE `" . $table . "` SET `tipo`= '" . $tipo . "' WHERE `id_imagens` = " . $id;
    
    mysqli_query($database, $sql);
    
    close_database($database);
}
function add($table, $tipo, $nome, $classe){
    
    $database = open_database();
    
    $sql = "INSERT INTO `" . $table . "`(`nome`, `tipo`, `categoria`) VALUES ('" . $nome . "','" . $tipo . "'," . $classe . ")";
    
    $result = mysqli_query($database, $sql);
    
    close_database($database);
}
