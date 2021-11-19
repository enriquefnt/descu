




<?php

foreach ($casosCtrl as $casoCtrl) {
 
    $nombresCtrl[]=$casoCtrl['Nombre'];
    $areasCtrl[]=$casoCtrl['areaoperativa'];       
    }   
 


 ?>


<p> El niño <?= htmlspecialchars($casoCtrl['Nombre'], ENT_QUOTES, 'UTF-8'); ?> del área operativa
<?= htmlspecialchars($casoCtrl['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?>
 se cargó correctamente</p>