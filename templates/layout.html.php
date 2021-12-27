<!DOCTYPE html>
<html style=" height:100%;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../estilos/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
 <script src="https://kit.fontawesome.com/07598e026b.js" crossorigin="anonymous"></script>
 <!--<link rel="stylesheet" type="text/css" href="../estilos/lay_style.css"> -->
 <link rel="shortcut icon" href="../public/ico_descu.png">
	<title><?=$title?></title>
</head>


<body class="w3-light-grey">
<header class="w3-row-padding header w3-blue-grey">
<h1>Registro de Controles Antropométricos</h1>
<h3>Sectores descubiertos</h3>



<div>
<div class="w3-bar w3-border w3-light-grey">


  		<a href="../public/index.php" class="w3-bar-item w3-button">Inicio</a>
		<a href="../includes/buscacaso.php"class="w3-bar-item w3-button">Carga Datos</a>&nbsp &nbsp
		<a href="../includes/cargaControl.php"class="w3-bar-item w3-button">Carga Controles</a>&nbsp &nbsp
		<a href="../includes/verlista.php"class="w3-bar-item w3-button ">Listados</a></li>
		<a href="../includes/logout.php"class="w3-bar-item w3-button ">Salir</a></li>
</div>
</div>
</header >




<main class="w3-row-padding table-container">	
	<div class="w3-container" >
		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">&times;</span>	
			<?=$output?>
	</div>

</main>

<footer class="w3-row-padding footer" >
	
	<div class="w3-container w3-blue-grey  w3-center">
<h3 > DNyAS - Programa: Observatorio Vigilancia Nutricional</h3>
</div>
</footer>
</body>
</html>