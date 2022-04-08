<?php 
session_start();
?>

<div>
    <fieldset >
      <legend>Datos personales</legend>
<form class="w3-group w3-light-grey" action="" method="post" >
  
  <input type="hidden" name="id" value="<?=$datosCaso['idPersona'] ?? ''?>">  

  

  <label for="Nombre">Nombre:</label><br>
  <input type="text" required="required" id="Nombre" name="Nombre" placeholder="Nombre" autocomplete="off" value="<?=$datosCaso['Nombre'] ?? ''?>"><br><br>

  <label for="Apellido">Apellido:</label><br>
  <input type="text" required="required" id="Apellido" name="Apellido" placeholder="Apellido" autocomplete="off" value="<?=$datosCaso['Apellido'] ?? ''?>"><br><br>


  <label for="Sexo">Sexo:</label><br>
  <select name="Sexo" id="Sexo" value="<?=$datosCaso['Sexo'] ?? ''?>">
    <option selected value='<?=$datosCaso['Sexo'] ?? ''?>'><?=$fila['Sex'] ?? ''?></option>
    <option value='1'>Masculino</option>
    <option value='2'>Femenino</option>
    <option value='3'>No determinado</option>
    </select>
    <br><br>

  <label for="Nacimiento">Fecha de Nacimiento:</label><br>
  <input type="date" id="Nacimiento" name="Nacimiento" min="2015-01-01" value="<?=$datosCaso['Nacimiento'] ?? ''?>"><br><br>

 <label for="AOP">Area Operativa:</label><br>
  <select name="AOP" id="AOP" >
  
  

<?php 
echo '<option selected="selected" value=' .  $datosCaso['AOP']. selected .'>' . $fila['areaoperativa'] .'</option>';
$aope = [];
  foreach ($result as $aope) {
 echo '<option value=' .  $aope['idaop'].'>' . $aope['areaoperativa'] .'</option>';

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
    $('#AOP').val(1);
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
      data:"areaoperativa=" + $('#AOP').val(),
      success:function(r){
        $('#selectsector').html(r);
      }
    });
  }
</script>
</html>

