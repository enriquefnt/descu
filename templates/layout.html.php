<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
 <!-- <link rel="stylesheet" type="text/css" href="../estilos/lay_style.css"> -->

	<title><?=$title?></title>
</head>
<body>
<header class="w3-container w3-blue-grey">
<h1>Registros de datos</h1>
<h3>Sectores descubiertos</h3>
</header >
<!--<nav class="w3-panel w3-border" >
<ul class="w3-navbar w3-black">
<li><a href="../public/index.php">Inicio</a></li>
<li><a href="../includes/buscacaso.php">Carga Datos</a></li>
<li><a href="../includes/cargaControl.php">Carga Controles</a></li>
<li><a href="../includes/verlista.php">Listados</a></li>

</ul>
</nav>
-->
<div>
<div class="w3-bar w3-border w3-light-grey">


  		<a href="../public/index.php" class="w3-bar-item w3-button">Inicio</a>
		<a href="../includes/buscacaso.php"class="w3-bar-item w3-button">Carga Datos</a>&nbsp &nbsp
		<a href="../includes/cargaControl.php"class="w3-bar-item w3-button">Carga Controles</a>&nbsp &nbsp
		<a href="../includes/verlista.php"class="w3-bar-item w3-button ">Listados</a></li>
</div>
</div>





<main><span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-display-topright">X</span>	
	<div class="w3-container">


<?=$output?>
</div>
</main>

<footer style="w3-display-butoon-right" >
	
	<div class="w3-container w3-blue-grey">
<h3 > DNyAS - Programa: Observatorio Vigilancia Nutricional</h3>
</div>
</footer>
</body>
</html>