<?php
include __DIR__ . '/../includes/conect.php';
include __DIR__ . '/../includes/funciones.php';

try {
	if (isset($_POST['Nombre'])) {
/*
$record = [		'idPersona' => $_POST['idP'],
	 			'Nombre' => ucwords(strtolower($_POST['Nombre'])),
				'Apellido' => ucwords(strtolower($_POST['Apellido'])),
				'Nacimiento' =>$_POST['Nacimiento'],
				'Sexo' =>$_POST['Sexo'],
				'AOP' =>$_POST['AOP']];

	


	

	update($pdo, 'persona', 'idPersona',$record);






		save($pdo, 'persona', 'idPersona', [`id` => $_POST['idP'],
						  `Nombre` => $_POST['Nombre'],
						  `Apellido` => $_POST['Apellido'],
						  `Nacimiento` => $_POST['Nacimiento'],
						  `Sexo` => $_POST['Sexo'],
						  `AOP` => $_POST['AOP']]);
						
	*/	
		


		$id = $_POST['id'];
  		$Nombre = ucwords(strtolower($_POST['Nombre'])); 
  		$Apellido = ucwords(strtolower($_POST['Apellido']));
  		$Nacimiento = $_POST['Nacimiento'];
  		$Sexo = $_POST['Sexo'];
		$AOP = $_POST['AOP'];
  		$sql = "UPDATE `persona` SET 
			  		`Nombre`= '$Nombre',
			  		`Apellido`= '$Apellido',
			  		`Nacimiento`='$Nacimiento',
			  		`Sexo`= '$Sexo',
			  		`AOP`= '$AOP'
				where `idPersona`=$id";
  		$pdo->exec($sql); 	
  	//	$pdo->close();



  	//header('Location: /../descu/includes/secargoDat.php')	;
  header("location: verlista.php");
  				

  									}
		else {

		if (isset($_GET['id'])) {
			$datosCaso = findById($pdo, 'persona', 'idPersona', $_GET['id']);
		
		}

		$result = findAll($pdo, 'aopzonas','areaoperativa');
		
		$title = 'Editar';

		ob_start();

		include  __DIR__ . '/../templates/editardatos.html.php';

		$output = ob_get_clean();
	}
}
catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';