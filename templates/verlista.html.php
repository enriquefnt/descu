
	<form action="" method="post">
  <label for="AOP">Seleccione el área operativa:</label>
 
   <select name="AOP" required="required" id="AOP">
<option value=0>Seleccione AOP</option>
<?php
$aop = [];
  foreach ($result as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
</select>
  
  <input type="submit"  value="Seleccionar">

</form>




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


$aop= $_POST['AOP'];
foreach ($casos as $caso): ?>
   <?php if ($caso['idaop']==$aop){?>

		<tbody>
			<tr>
				<td align="left"><?= htmlspecialchars($caso['Nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td align="left"><?= htmlspecialchars($caso['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td align="right"><?= htmlspecialchars($caso['años'] .'A ' . $caso['meses'] .'M ' . $caso['dias'] .'D ', ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['FechaCtrl'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['Peso'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['Talla'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ZPE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ZTE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ZIMC'], ENT_QUOTES, 'UTF-8'); ?></td>

			</tr>
			<?php } ?>
  <?php endforeach; ?>
	
		</tbody>
	</table>



