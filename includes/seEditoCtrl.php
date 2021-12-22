<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';


      try {



$sql='call lista_controles('.$_GET['id'].');';

$controles = $pdo->query($sql);




$title = 'Controles';
   

ob_start();

include __DIR__ . '/../templates/lista_controles.html.php';
$output = ob_get_clean() ;


}
  
catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>



?>