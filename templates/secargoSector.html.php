<?php 
    if (is_null($_SESSION['tipo'])){
session_start(); }
?>





<?php

foreach ($aopsectores as $sector) {
 
    $aereaop[]=$sector['areaoperativa'];
    $sector[]=$sector['Sector'];   
    
    }   
 


 ?>
<div></div>

<p> El sector de <b> <?= htmlspecialchars($sector['Sector'], ENT_QUOTES, 'UTF-8'); ?> 
</b> se ha agregado al área operativa de  <b>
<?= htmlspecialchars($sector['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?> </b>
 </p>
 </div>
