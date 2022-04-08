<?php
include __DIR__ . '/../includes/conect.php';
include __DIR__ . '/../includes/funciones.php';


	

		$result = findAll($pdo, 'aopzonas','areaoperativa');

foreach ($result as $aope) {
 echo   $aope['idaop']. '  ' . $aope['areaoperativa'] .'<br>' ;
	}	
?>