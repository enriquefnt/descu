<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

/*// $sql='call Lista_conControl;';

// $casosCtrl = $pdo->query($sql);


// $sql='call lista_controles('.$_GET['id'].');';


$sql='call lista_controles('.$_GET['id'].')';
$casosCtrl = $pdo->query($sql);


 $title='Se cargo'	;
 
ob_start();

include __DIR__ . '/../templates/seEditoCtrl.html.php';
$output = ob_get_clean() ;
	


include  __DIR__ . '/../templates/layout.html.php';
*/

 


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