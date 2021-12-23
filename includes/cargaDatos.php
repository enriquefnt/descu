

<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

 try {




if (isset($_POST['Nombre'])) {

$record = [
	 			'Nombre' => ucwords(strtolower($_POST['Nombre'])),
				'Apellido' => ucwords(strtolower($_POST['Apellido'])),
				'Nacimiento' =>$_POST['Nacimiento'],
				'Sexo' =>$_POST['Sexo'],
				'AOP' =>$_POST['AOP']];


echo "Registro _ $record[0] _ $record[1]";
insert ($pdo, 'persona', $record);
session_unset();

header('Location: /../descu/includes/secargoDat.php')	;	 


}



   

$result = findAll($pdo, 'aopzonas' ,'areaoperativa');
 $title = 'Carga Datos';
 

ob_start();
include __DIR__ . '/../templates/cargaDatos.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>


		

