<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

try {
 	
 
ob_start();
include __DIR__ . '/../templates/secargo.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>

