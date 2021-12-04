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
				<th>Por Peso</th>
				<th>Por Talla</th>
			</tr>
		</thead>

	<?php //} ?>





<?php 
	foreach ($controles as $control):
?>
		<tbody>
			<tr class="w3-hover-pale-green">
				<td><?= htmlspecialchars($control['FechaCtrl'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td align="right"><?= htmlspecialchars($control['años'] .'A ' . $control['meses'] .'M ' . $control['dias'] .'D ', ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['Peso'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['Talla'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ZPE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ZTE'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ZIMC'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ClaPe'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?= htmlspecialchars($control['ClaTa'], ENT_QUOTES, 'UTF-8'); ?></td>
				<?php $areaOP =$control['areaoperativa'] ; ?>

			</tr>



		</tbody>
  <?php endforeach; ?>

<?php 

if (isset($_POST['idPersona'])) { ?>
	<h4>Controles registrados de <b> <?= $_POST['Nombre'] ; ?> </b></h4>

<?php } ?>
</table>
</div>