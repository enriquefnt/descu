<?php
$caso = [];
 foreach ($casos as $caso) {
  if (isset($_POST['idPersona'])  && $caso['idPersona']==$_POST['idPersona']) {

   ?>
<tbody>
<tr>
       <!-- <td><?= htmlspecialchars($caso['Nombre'] , ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>-->
        <td><?= htmlspecialchars($caso['años'] .'A ' . $caso['meses'] .'M ' . $caso['dias'] .'D ', ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['FechaCtrl'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['Peso'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['Talla'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['ZPE'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['ZTE'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['ZIMC'], ENT_QUOTES, 'UTF-8'); ?></td>

      </tr>
  
    </tbody>
 <?php
    }
}
?>
</table>


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


