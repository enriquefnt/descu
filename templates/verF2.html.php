<?php 
if (is_null($_SESSION['nombre'])) {
session_start();
}
?>
<!--<div class="w3-responsive">
    <fieldset >
<form class="w3-group w3-light-grey" action="" method="post">

<label for="anioRonda">Año</label><br>
  <input type="number" id="anioRonda" name="anioRonda" min="2015" value=""><br>

  <label for="numRonda">Ronda</label><br>
  <input type="number" id="numRonda" name="numRonda" min="1"  max="v"alue=""><br><br>
  
  <input type="submit"  value="Seleccionar">

</form>
</fieldset>
</div> -->
<div class="w3-responsive">
  <table class="w3-table-all w3-tiny">
<?php 

if (isset($_SESSION['tipo'])) { ?>

			<thead>
			<tr class="w3-grey">
				<br><br>
				<th>Area Operativa</th>
				<th>Controlados < 2</th>
				<th>AD</th>
				<th>BP</th>
				<th>MBP</th>
				<th>AP</th>
				<th>BT</th>
				<th>RBP</th>
				<th>RAP</th>
				<th>Controlados > 2</th>
				<th>AD</th>
				<th>BP</th>
				<th>MBP</th>
				<th>AP</th>
				<th>BT</th>
				<th>RBP</th>
				<th>RAP</th>
			</tr>
		</thead>

	<?php } ?>



<?php 

$aop=$_SESSION['AOP'];

foreach ($areaops as $areaop): ?>
   <?php if  ($areaop['idaop']==$aop||$_SESSION['tipo']==1) {?>

	<tbody>
		<tr class="w3-hover-pale-green" align="center">
	   	<td align="center" !important; ><?= htmlspecialchars($areaop['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>
	   	<td align="center"><?= htmlspecialchars($areaop['Controlados <2'], ENT_QUOTES, 'UTF-8'); ?></td>
	    <td><?= htmlspecialchars($areaop['AD<2'], ENT_QUOTES, 'UTF-8'); ?></td>
	   	<td><?= htmlspecialchars($areaop['BP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['MBP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['AP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['BT<2'], ENT_QUOTES, 'UTF-8'); ?></td>	
		<td><?= htmlspecialchars($areaop['RBP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['RAP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		
		<td align="center"><?= htmlspecialchars($areaop['Controlados >2'], ENT_QUOTES, 'UTF-8'); ?></td>
	    <td><?= htmlspecialchars($areaop['AD>2'], ENT_QUOTES, 'UTF-8'); ?></td>
	    <td><?= htmlspecialchars($areaop['BP>2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['MBP>2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['AP>2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['BT>2'], ENT_QUOTES, 'UTF-8'); ?></td>	
		<td><?= htmlspecialchars($areaop['RBP>2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['RAP>2'], ENT_QUOTES, 'UTF-8'); ?></td>
    <?php } ;  ?>
 
  <?php endforeach; ?>


	
		</tbody>
	</table>
</div>




