<?php
include __DIR__ . '/../includes/conect.php';
include __DIR__ . '/../includes/funciones.php';

try {
	if (isset($_POST['Nombre'])) {


		$id = $_POST['id'];
  		$Nombre = ucwords(strtolower($_POST['Nombre'])); 
  		$Apellido = ucwords(strtolower($_POST['Apellido']));
  		$Nacimiento = $_POST['Nacimiento'];
  		$Sexo = $_POST['Sexo'];
		$AOP = $_POST['AOP'];
		$SEC = $_POST['SEC'];
  		$sql = "UPDATE `persona` SET 
			  		`Nombre`= '$Nombre',
			  		`Apellido`= '$Apellido',
			  		`Nacimiento`='$Nacimiento',
			  		`Sexo`= '$Sexo',
			  		`AOP`= '$AOP' ,
			  		`SEC`= '$SEC'
				where `idPersona`=$id";
  		$pdo->exec($sql); 	
  	
  header("location: verlista.php");
  				

  									}
		else {

		if (isset($_GET['id'])) {
		$datosCaso = findById($pdo, 'persona', 'idPersona', $_GET['id']);
			}

			
	

		$result = findAll($pdo, 'aopzonas','areaoperativa');


		$query = $pdo->prepare('call saltaped_relbas.persona_id('.$_GET['id'].')');
    	$query->execute();
    	$fila = $query->fetch();	







		
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