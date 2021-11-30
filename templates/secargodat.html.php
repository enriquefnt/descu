


<?php


foreach ($casos as $caso) {
 
    $nombres[]=$caso['Nombre'];
    $areas[]=$caso['areaoperativa'];       
    }	
 


 ?>





<div class="w3-conteiner w3-responsive">
    <fieldset>
<P><?=end($nombres).' del área operativa '. end($areas) . ' se cargo correctamente.';?> </P>

</fieldset>
</div>
