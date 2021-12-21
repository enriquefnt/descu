<div class="w3-responsive">
  <table class="w3-table-all w3-tiny">
<?php 

// if (isset($_POST['idPersona'])) { ?>

			<thead>
			<tr class="w3-grey">
				<th>Fecha Control</th>
				<th>Edad (AMD)</th>
				<th>Peso</th>
				<th>Talla</th>
				<th>Z Peso/Edad</th>
				<th>Z Talla/Edad</th>
				<th>Z IMC/Edad</th>
				<th>Editar</th>
			</tr>
		</thead>

	





<?php 
	foreach ($controles as $control):
?>
		<tbody>
			<tr class="w3-hover-pale-green">
				<td><?= htmlspecialchars($control['FechaCtrl'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td align="right"><?= htmlspecialchars($control['años'] .'A ' . $control['meses'] .'M ' . $control['dias'] .'D ', ENT_QUOTES, 'UTF-8'); ?></td>
				<td align="center"><?= htmlspecialchars($control['Peso'], ENT_QUOTES, 'UTF-8').' ('.$control['ClaPe'].')'; ?></td>
			<td><?= htmlspecialchars($control['Talla'], ENT_QUOTES, 'UTF-8').' ('.$control['ClaTa'].')'; ?></td>
				<td><?= htmlspecialchars($control['ZPE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ZTE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ZIMC'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><a href="editaControl.php?id=<?=$control['idcontrol']; ?>"><i class="far fa-edit"></i></a></td>

			</tr>



		</tbody>
  <?php 
endforeach; 
  $areaoperativa=$control['areaoperativa'];
  ?>




<?php 

if (isset($control['areaoperativa'])) { ?>
	<h4>Controles registrados de <b> <?= $control['Nombre'] ; ?> </b> - <?= $areaoperativa ; ?></h4>

<?php } ?>
</table>
</div>