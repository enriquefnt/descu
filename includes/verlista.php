<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';



      try {


$sql='call lista_simple;';

$casos = $pdo->query($sql);

 

  $title = 'Listado';

ob_start();
include __DIR__ . '/../templates/verlista.html.php';
$output = ob_get_clean() ;
}
  
catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>






