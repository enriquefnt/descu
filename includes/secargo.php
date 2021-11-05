<?php


 	
 
ob_start();
include __DIR__ . '/../templates/secargodat.html.php';
$output = ob_get_clean() ;
	


include  __DIR__ . '/../templates/layout.html.php';


?>