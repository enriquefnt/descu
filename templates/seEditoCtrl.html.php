




<?php

foreach ($casosCtrl as $casoCtrl) {
 
    $nombresCtrl[]=$casoCtrl['Nombre'];
    $areasCtrl[]=$casoCtrl['areaoperativa'];   
    $clasPesoEdad=$casoCtrl['ClaPe'];
    $clasTallaEdad=$casoCtrl['ClaPe'];
    }   
 


 ?>


<p> El control de <b> <?= htmlspecialchars($casoCtrl['Nombre'], ENT_QUOTES, 'UTF-8'); ?> 
</b> del área operativa <b>
<?= htmlspecialchars($casoCtrl['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?> </b>
 se cargó correctamente</p>
 <p> Se encuentra con su peso en <b> <?=($casoCtrl['ClaPe']);?></b> y su talla en <b> <?=($casoCtrl['ClaTa']);?></b>
 </p>