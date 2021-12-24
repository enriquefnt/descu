<?php


foreach ($usuarios as $usuario) {
 
    $nombres=$usuario['nombre'];
    $areas=$usuario['AOP'];       
    }	
 


 ?>



<div class="w3-conteiner w3-responsive">
    <fieldset>
<P><b><?=$nombres;?></b> del área operativa <b><?=$areas;?></b> se cargo correctamente </P>

</fieldset>


</div>
