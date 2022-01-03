<?php 
if (is_null($_SESSION['nombre'])) {
session_start();
}
?>


<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

$sql='SELECT * FROM saltaped_relbas.usuarios;';

$usuarios = $pdo->query($sql);

 $title='Se cargo'	;
 
ob_start();

include __DIR__ . '/../templates/seRegistroUsuario.html.php';
$output = ob_get_clean() ;
	


include  __DIR__ . '/../templates/layout.html.php';


?>