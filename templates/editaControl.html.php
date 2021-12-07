

<div>
    <fieldset>

     
 
      <legend><h4><?=$row['Nombre']. ' -  ' .$row['areaoperativa'] ?? ''?></h4></legend>
<form class="w3-container w3-light-grey" autocomplete="off" method="post" action=""?>


  <input type="hidden"name="id" id="idcontrol" value="<?=$datosControl['idcontrol'] ?? ''?>">
  <label for="FechaControl">Fecha de control:</label><br>
  <input type="date" id="FechaControl" name="FechaControl" value="<?=$datosControl['FechaControl'] ?? ''?>"><br><br>
  <label for="Peso">Peso</label><br>
 <input type="number" step="0.01" min="1" max="60"id="Peso" name="Peso" value="<?=$datosControl['Peso'] ?? ''?>"><br><br>
 <label for="Peso">Talla</label><br>
 <input type="number"  step="0.01" min="45" max="170" id="Talla" name="Talla" value="<?=$datosControl['Talla'] ?? ''?>"><br><br>
 <label for="Observaciones">Observaciones:</label><br>
<textarea id="Observaciones" name="Observaciones" rows="3" cols="20"><?=$datosControl['Observaciones'] ?? ''?></textarea>


 <input type="submit"  name="submit"  class="w3-button w3-black" value="Guardar Cambios">

</form> 

</fieldset>
</div>