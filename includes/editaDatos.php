<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

//save($pdo, 'joke', 'id', ['id' => $_POST['jokeid'],
 try {




if (isset($_POST['idPersona'])) {

$record = [
	 							'Nombre' => ucwords(strtolower($_POST['Nombre'])),
							 	'Apellido' => ucwords(strtolower($_POST['Apellido'])),
							 	'Nacimiento' =>$_POST['Nacimiento'],
							 	'Sexo' =>$_POST['Sexo'],
							    'AOP' =>$_POST['AOP']];
update ($pdo, 'persona','idPersona', $record);
session_unset();

header('Location: /../descu/includes/secargoDat.php')	;	 


}
	
	else {

	if (isset($_GET['id'])) {
			$datosCaso = findById($pdo, 'persona', 'idPersona', $_GET['id']);
							}
		}

		$title = 'Editar datos';
		$result = findAll($pdo, 'aopzonas');

		ob_start();

		include  __DIR__ . '/../templates/editardatos.html.php';

		$output = ob_get_clean();
		}

catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';

