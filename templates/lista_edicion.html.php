

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

<div class="w3-responsive">
  <table class="w3-table-all w3-tiny">
<?php 

if (isset($_POST['AOP'])) { ?>

			<thead>
			<tr class="w3-grey">
				<th>Nombre</th>
			<!--	<th>Area Operativa Nombre</th> -->
				<th>Edad (AMD)</th>
				<th>Fecha Control</th>
				<th>Peso</th>
				<th>Talla</th>
				<th>Z Peso/Edad</th>
				<th>Z Talla/Edad</th>
				<th>Z IMC/Edad</th>
				<th>Por Peso</th>
				<th>Por Talla</th>
				<th>Editar</th>
			</tr>
		</thead>

	<?php } ?>



<?php 

if (isset($_POST['AOP'])) {
	$aop= $_POST['AOP'];
}

foreach ($casos as $caso): ?>
   <?php if  ($caso['idaop']==$aop) {?>

		<tbody>
			<tr class="w3-hover-pale-green">
				<td align="left"><?= htmlspecialchars($caso['Nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
			<!--	<td align="left"><?= htmlspecialchars($caso['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td> -->
				<td align="right"><?= htmlspecialchars($caso['años'] .'A ' . $caso['meses'] .'M ' . $caso['dias'] .'D ', ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['FechaCtrl'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['Peso'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['Talla'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ZPE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ZTE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ZIMC'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ClaPe'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($caso['ClaTa'], ENT_QUOTES, 'UTF-8'); ?></td>
			 	<td><a href="editaDatos.php?id=<?=$caso['idPersona']; ?>">Editar</a></td>
			 	
				

			
				<?php $areaOP =$caso['areaoperativa'] ; ?>

			</tr>
			<?php } ?>
  <?php endforeach; ?>

<?php 

if (isset($_POST['AOP'])) { ?>
	<h4><?='Area Operativa: '. $areaOP .  ' al día ' . date("d-m-Y "); ?></h4>

<?php } ?>

	
		</tbody>
	</table>
</div>




