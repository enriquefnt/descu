<div>
    <fieldset >
      <legend>Datos personales</legend>
<form class="w3-group w3-light-grey" action="" method="post" >
  
  <input type="hidden" name="idPersona" value="<?=$datosCaso['idPersona'] ?? ''?>">  

  <label for="Nombre">Nombre:</label><br>
  <input type="text" required="required" id="Nombre" name="Nombre" placeholder="Nombre" autocomplete="off" value="<?=$datosCaso['Nombre'] ?? ''?>"><br><br>

  <label for="Apellido">Apellido:</label><br>
  <input type="text" required="required" id="Apellido" name="Apellido" placeholder="Apellido" autocomplete="off" value="<?=$datosCaso['Apellido'] ?? ''?>"><br><br>

  <label for="Sexo">Sexo:</label><br>
  <select name="Sexo" id="Sexo" value="<?=$datosCaso['Sexo'] ?? ''?>">
    <option value='1'>Masculino</option>
    <option value='2'>Femenino</option>
    <option value='3'>No determinado</option>
    </select>
    <br><br>

  <label for="Nacimiento">Fecha de Nacimiento:</label><br>
  <input type="date" id="Nacimiento" name="Nacimiento" min="2015-01-01" value="<?=$datosCaso['Nacimiento'] ?? ''?>"><br><br>

  <label for="AOP">Area Operativa:</label><br>
  <select name="AOP" required="required" id="AOP">
  <option value=0>Seleccione AOP</option>
<?php
$aop = [];
  foreach ($result as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
</select><br><br>
  <input type="submit"  class="w3-button w3-black" value="Cargar">
</fieldset>
</div>


