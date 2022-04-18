<?php 
session_start();
?>

<div>
    <fieldset >

 <legend>Datos personales</legend>
<form class="w3-group w3-light-grey" action="" method="post" >
  
  <label for="Nombre">Nombre:</label><br>
  <input type="text" required="required" id="Nombre" name="Nombre" placeholder="Nombre" autocomplete="off" value=""><br><br>
  <label for="Apellido">Apellido:</label><br>
  <input type="text" required="required" id="Apellido" name="Apellido" placeholder="Apellido" autocomplete="off" value=""><br><br>
	<label for="Sexo">Sexo:</label><br>
  
  <select name="Sexo" id="Sexo" value="-------">
    <option value='1'>Masculino</option>
    <option value='2'>Femenino</option>
    <option value='3'>No determinado</option>
    </select>
    <br><br>
  <label for="Nacimiento">Fecha de Nacimiento:</label><br>
  <input type="date" id="Nacimiento" name="Nacimiento" min="2015-01-01" max="<?=date('Y-m-d');?>" value=""><br><br>

<label for="AOP">Area Operativa:</label><br>
<select name="AOP" required="required" id="AOPe" value="Area Operativa">>

<?php

echo '<option selected="selected" value=' .  $_SESSION['AOP']. selected .'>' . $_SESSION['AreaOperativa'] .'</option>';

$aop = [];
  foreach ($result as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
</select><br><br>
<label for="Sector">Sector:</label><br>
			<div id="selectsector"></div>

<br>
 <input type="submit"  class="w3-button w3-black" value="Cargar">


<div>
    <fieldset >
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#AOP').val();
		recargarLista();

		$('#AOP').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"sectores.php",
			data:"AOP=" + $('#AOPe').val(),
			success:function(r){
				$('#selectsector').html(r);
			}
		});
	}
</script>
</html>