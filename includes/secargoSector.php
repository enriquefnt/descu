<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

$sql='call aop_sectores;';

$aopsectores = $pdo->query($sql);

 $title='Se cargo'	;
 
ob_start();

include __DIR__ . '/../templates/secargoSector.html.php';
$output = ob_get_clean() ;
	


include  __DIR__ . '/../templates/layout.html.php';


?>