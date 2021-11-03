<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../estilos/lay_style.css">
	<title><?=$title?></title>
</head>
<body>
<header>
<h1>Registros de datos</h1>
<h3>Sectores descubiertos</h3>
</header>
<nav>
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

<footer class="seccion-final">
<h3 class="seccion-final__parrafo"> DNyAS - Programa: Observatorio Vigilancia Nutricional</h3>

</footer>
</body>
</html>