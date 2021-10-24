





<h3>Se cargo el registro correctamente</h3>

<div>
    <table>
      <table>
    <thead>
      <tr>
       <th>Nombre</th>
        <th>Area Operativa Nombre</th> 
        <th>Edad (AMD)</th>
        <th>Fecha Control</th>
        <th>Peso</th>
        <th>Talla</th>
        <th>Z Peso/Edad</th>
        <th>Z Talla/Edad</th>
        <th>Z IMC/Edad</th>
      </tr>
    </thead>
    

<?php
$caso = [];
 foreach ($casos as $caso) {
  if (isset($_POST['idPersona'])  && $caso['idPersona']==$_POST['idPersona']) {

   ?>
<tbody>
<tr>
       <td><?= htmlspecialchars($caso['Nombre'] , ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($caso['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>
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

