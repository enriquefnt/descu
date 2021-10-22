
<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
try {

if (isset($_POST['FechaControl'])) {

$record = [
	 							
	 						
	 							'idPersona' => $_POST['idPersona'],
	 							'FechaControl' => $_POST['FechaControl'],
							 	'Peso' => $_POST['Peso'],
							 	'Talla' =>$_POST['Talla'],
							    'Observaciones' =>$_POST['Observaciones']];
insert($pdo, 'control', $record);
//	header('Location: vercontrol.php')	;		 
//header('Location: mensaje_secargo.html.php')	;	



}
$sql='call lista_simple;';

$casos = $pdo->query($sql);
ob_start();
include __DIR__ . '/../templates/cargaControl.html.php';
$output = ob_get_clean() ;
}

    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
	

//

		include  __DIR__ . '/../templates/layout.html.php';

//header('Location: vercontrol.php')	;	

