<?php
include __DIR__ . '/../includes/conect.php';
include __DIR__ . '/../includes/funciones.php';

try {
	if (isset($_POST['id'])) {

/*

$record = [		'idcontrol' => $_POST['id'],
	 			'FechaControl' => $_POST['`FechaControl`'],
				'Peso' => $_POST['Peso'],
				'Talla' =>$_POST['Talla'],
				'Observaciones' =>$_POST['Observaciones']] ;

	update($pdo, 'control', 'idcontrol',$record);


*/

		$idPersona=$_POST['idPersona'];
		$id = $_POST['id'];
  		$FechaControl = $_POST['FechaControl']; 
  		$Peso = $_POST['Peso'];
  		$Talla = $_POST['Talla'];
  		$Observaciones = $_POST['Observaciones'];
		  		$sql = "UPDATE `control` SET 
			  		`FechaControl`= '$FechaControl',
			  		`Peso`= '$Peso',
			  		`Talla`='$Talla',
			  		`Observaciones`= '$Observaciones'
			  	where `idcontrol`=$id";
  		$pdo->exec($sql); 	





$sql='call lista_controles('.$_POST['idPersona'].');';

$controles = $pdo->query($sql);

$idP=$_POST['idPersona'];



session_unset();


header('Location: /../descu/includes/seEditoCtrl.php?id='.$_POST['idPersona'].'')	;	


// header('Location: /../descu/includes/lista_controles.php')	;
	
  		//header("location: verlista.php");
		
 									}
		else {

		if (isset($_GET['id'])) {
			$datosControl = findById($pdo, 'control', 'idcontrol', $_GET['id']);
					
 		$query = $pdo->prepare('call control_id('.$_GET['id'].')');
		$query->execute();
		$row = $query->fetch();		

			}


		
		$title = 'Editar';

		ob_start();

		include  __DIR__ . '/../templates/editaControl.html.php';

		$output = ob_get_clean();
	}
}
catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';