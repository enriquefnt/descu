<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title><?=$title?></title>
</head>
<body>
<header class="w3-container w3-teal">
<h1>Registros de datos</h1>
<h3>Sectores descubiertos</h3>
</header>
<nav class="w3-color-green">
<ul>
<li><a href="../public/index.php">Inicio</a></li>
<li><a href="../includes/buscacaso.php">Carga Datos</a></li>
<li><a href="../includes/cargaControl.php">Carga Controles</a></li>
<li><a href="../includes/verlista.php">Listados</a></li>

</ul>
</nav>

<main>
<?=$output?>

</main>

<footer class="w3-container w3-teal">
<h3 class="seccion-final__parrafo"> DNyAS - Programa: Observatorio Vigilancia Nutricional</h3>

</footer>
</body>
</html>