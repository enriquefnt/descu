<?php 
session_start();
?>

<div>
    <fieldset>

     
 
      <legend><h4><?=$row['Nombre'].' - '.$row['años'].'A '  .$row['meses'].'M '. ' - ' .$row['areaoperativa']; ?> </h4></legend>
<form class="w3-container w3-light-grey" autocomplete="off" method="post" action=""?>


  <input type="hidden"name="idPersona" id="idPersona" value=<?=$row['idPersona'] ?> >
  <label for="FechaControl">Fecha de control:</label><br>
  <input type="date" id="FechaControl" name="FechaControl"  max="<?=date('Y-m-d');?>" value=""required><br><br>
  <label for="Peso">Peso</label><br>
 <input type="number" step="0.01" min="1" max="60"id="Peso" name="Peso" value="" required><br><br>
 <label for="Peso">Talla</label><br>
 <input type="number"  step="0.1" min="45" max="170" id="Talla" name="Talla" value=""required><br><br>
 <label for="Observaciones">Observaciones:</label><br>
<textarea id="Observaciones" name="Observaciones" rows="3" cols="20"></textarea>


 <input type="submit"  name="submit"  class="w3-button w3-black" value="Guardar ">

</form> 

</fieldset>
</div>