<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

$sql='call lista_simple;';

$casos = $pdo->query($sql);

 $title='Se cargo'	;
 
ob_start();

include __DIR__ . '/../templates/secargodat.html.php';
$output = ob_get_clean() ;
	


include  __DIR__ . '/../templates/layout.html.php';


?>