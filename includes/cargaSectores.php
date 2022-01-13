<?php

   
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
 
session_start();

    
    
$result = findAll($pdo, 'aopzonas' ,'areaoperativa');

  try {
   
    if(isset($_POST['AOP']))
    {
       
        $record = [
                'idAop' => ucwords(strtolower($_POST['AOP'])),
                'Sector' => ucwords(strtolower($_POST['sector']))];
               
print_r($record);
echo '  '.$_POST['AOP'] .'  '.$_POST['sector'];
insert ($pdo, 'sectores', $record);
//session_unset();

//header('Location: /../descu/includes/secargoSector.php')   ;    
     

       {
            echo '<script>alert("Se cargo correctamente el sector")</script>';
        }
    
$result = findAll($pdo, 'aopzonas' ,'areaoperativa');      
$title = 'Carga Sectores';
 
}
ob_start();
    include __DIR__ . '/../templates/cargaSectores.html.php';
    $output = ob_get_clean() ;
}
catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
include  __DIR__ . '/../templates/layout.html.php';


?>
   
