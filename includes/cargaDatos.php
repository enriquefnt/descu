

<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

 try {

if ((isset($_POST['Nombre'])) && $row != 0) {
	echo "Registro repetido, controle";
}


if (isset($_POST['Nombre'])) {

$record = [
	 							'Nombre' => $_POST['Nombre'],
							 	'Apellido' => $_POST['Apellido'],
							 	'Nacimiento' =>$_POST['Nacimiento'],
							 	'Sexo' =>$_POST['Sexo'],
							    'AOP' =>$_POST['AOP']];
insert ($pdo, 'persona', $record);

header('Location: /../descu/templates/mensaje_secargo.html.php')	;	 

}
else {
	session_unset();

}

//$query = query($pdo,'SELECT COUNT(*) FROM persona WHERE Nombre="torres" ');
//	$row = $query->fetch();
   

$result = findAll($pdo, 'aopzonas');


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


		

