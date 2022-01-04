<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
session_start();


      try {

$result = findAll($pdo, 'aopzonas','areaoperativa');


$sql='call saltaped_relbas.F2XAOP();';

$areaops = $pdo->query($sql);

$title = 'Formulario 2';

ob_start();


include __DIR__ . '/../templates/verF2.html.php';
$output = ob_get_clean() ;

}
  
catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>

