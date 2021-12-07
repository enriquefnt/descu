
<!-- <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"> -->
  <script src="../js/autocompleta.js"></script>
  

<div>
    <fieldset style = "width:30%">
      <legend>Buscar Caso</legend>
<form class="w3-container w3-light-grey"  action="" autocomplete="off" method="post" >
 
  <input  class="w3-input w3-border" style = "width:100%" type="text" name="Nombre" id="dName"><br><br>
 <input type="hidden"name="idPersona" id="dTel" value="xxxx"><br><br>

  <input type="submit" value="Buscar">
</form> 

</fieldset>
</div>
<div>

<?php

if ((isset($_POST['Nombre'])) && ($_POST['idPersona'])=='xxxx') { ?>  

<button class="w3-btn w3-yellow"> 
<a href="../includes/cargaDatos.php">No existe, cargar los datos</a>
</button>

 <?php } 

elseif (isset($_POST['Nombre'])) { ?> 
 
 <button class="w3-btn w3-green"> 
<a href="../includes/cargaControl.php">Tiene registrados los datos, cargar control</a>
</button>

 <?php } ?>

 

</div>

<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
          
      ac.attach({
        target: "dName",
        data: "search.php",
        
        // OPTIONAL
        delay : 500,
        min : 3
      });
    });
    </script>



