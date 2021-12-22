<!-- <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"> -->
  <script src="../js/autocompleta.js"></script>
  

<div>
    <fieldset>
      <legend>Control</legend>
<form class="w3-container w3-light-grey" autocomplete="off" method="post" action=""?>


 <label for="dName">Buscar caso:</label><br>
  <input type="text" name="Nombre" id="dName"><br>
 <input type="hidden"name="idPersona" id="dTel" value="idPersona">
  <label for="FechaControl">Fecha de control:</label><br>
  <input type="date" id="FechaControl" name="FechaControl" value=""><br>
  <label for="Peso">Peso</label><br>
 <input type="number" step="0.01" min="1" max="60"id="Peso" name="Peso" value=""><br>
 <label for="Peso">Talla</label><br>
 <input type="number"  step="0.1" min="45" max="170" id="Talla" name="Talla" value=""><br><br>
 <label for="Observaciones">Observaciones:</label><br>
<textarea id="Observaciones" name="Observaciones" rows="3" cols="20">
</textarea>


<input type="submit" value="Cargar">

</form> 

</fieldset>
</div>



<script>
    // agrega autocompletado
    window.addEventListener("DOMContentLoaded", function(){
          
      ac.attach({
        target: "dName",
        data: "search.php",
        
        // OPTIONAL
        delay : 250,
        min : 3
      });
    });
    </script>



