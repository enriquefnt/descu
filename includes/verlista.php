<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
session_start();


      try {

$result = findAll($pdo, 'aopzonas','areaoperativa');


$sql='call lista_ultimo_crl;';

$casos = $pdo->query($sql);

$title = 'Listado';

ob_start();

//if(isset($_SESSION['nombre']) && ($_SESSION['tipo']==0)){
include __DIR__ . '/../templates/lista_edicion.html.php';//}
$output = ob_get_clean() ;

}
  
catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
   

include  __DIR__ . '/../templates/layout.html.php';
?>






