
<!-- <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"> -->
  <script src="../js/autocompleta.js"></script>
  <STYLE>A {text-decoration: none;} </STYLE>

<div>
    <fieldset>
      <legend>Buscar Caso</legend>
<form action="" autocomplete="off" method="post" action=""?>
 
  <input type="text" name="Nombre" id="dName"><br><br>
 <input type="hidden"name="idPersona" id="dTel" value="xxxx"><br><br>
  <input type="submit" value="Ver">
</form> 

</fieldset>
</div>
<div>

<?php

if ((isset($_POST['Nombre'])) && ($_POST['idPersona'])=='xxxx') { ?>  
<div class="w3-container w3-yellow">
<button class="w3-btn w3-grey"> 
<a href="../includes/cargaDatos.php">No existe, cargar los datos</a>
</button>
</div>
 <?php } 

else { ?>
  <div class="w3-panel w3-green">
 <button class="w3-btn w3-grey"> 
<a href="../includes/cargaControl.php">Tiene registrados los datos, cargar control</a>
</button>
</div>
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



