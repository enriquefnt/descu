<?php
include __DIR__ . '/../includes/conect.php';
include __DIR__ . '/../includes/funciones.php';

try {
	if (isset($_POST['idPersona'])) {


  		$record = [			
								'idPersona' => $_POST['idPersona'],
	 							'FechaControl' => $_POST['FechaControl'],
							 	'Peso' => $_POST['Peso'],
							 	'Talla' =>$_POST['Talla'],
							    'Observaciones' =>$_POST['Observaciones']];
insert($pdo, 'control', $record);
//session_unset();

//session_unset();


header('Location: /../descu/includes/secargoCtrl.php')	;	 


	
  		
		
 									}
		else {

		if (isset($_GET['id'])) {
			
		
			$query = $pdo->prepare('call persona_id('.$_GET['id'].')');
		$query->execute();
		$row = $query->fetch();	


		}

		
		$title = 'Editar';

		ob_start();

		include  __DIR__ . '/../templates/nuevoControl.html.php';

		$output = ob_get_clean();
	}
}
catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';