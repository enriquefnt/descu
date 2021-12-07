

<?php
//$pdo = new PDO('mysql:host=localhost;dbname=baserel;charset=utf8', 'enriquefnt', 'enfi7625');
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>




<?php
try {

$pdo = new PDO('mysql:host=212.1.210.51;dbname=saltaped_relbas;charset=utf8', 'saltaped_descu', 'descu12#');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
$title = 'Ocurrio un error';
$output = 'No se pudo conectar al servidor: '
. $e->getMessage() . ' en '
. $e->getFile() . ':' . $e->getLine();

}

