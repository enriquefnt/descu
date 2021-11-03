
<!-- <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"> -->
  <script src="../js/autocompleta.js"></script>
  

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
// if (($_POST['idPersona'])=='xxxx') and (isset($_POST['idPersona'])) { 

if ((isset($_POST['idPersona'])) && ($_POST['idPersona'])=='xxxx') { ?>  
 
<a href="../includes/cargaDatos.php">No existe, cargar los datos</a>
 <?php } 

else { ?>
 
<a href="../includes/cargaControl.php">Tiene registrados los datos, cargar control</a>
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



