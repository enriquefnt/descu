<?php 
if (is_null($_SESSION['nombre'])) {
session_start();
}
?>

<div class="w3-responsive">
  <table class="w3-table-all w3-tiny">
<?php 

if (isset($_SESSION['tipo'])) { ?>

			<thead>
			<tr class="w3-grey">
				<br><br>
				<th>Area Operativa</th>
				<th>Ronda</th>
				<th>Total Controlados < 2</th>
				<th>BP</th>
				<th>MBP</th>
				<th>AP</th>
				<th>BT</th>
				<th>RBP</th>
				<th>RAP</th>
				<th>Total controlados > 2</th>
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
		<tr class="w3-hover-pale-green">
	   	<td><?= htmlspecialchars($areaop['areaoperativa'], ENT_QUOTES, 'UTF-8'); ?></td>
			<td><?= htmlspecialchars($areaop['ronda'], ENT_QUOTES, 'UTF-8'); ?></td>
	   	<td align="center"><?= htmlspecialchars($areaop['Controlados <2'], ENT_QUOTES, 'UTF-8'); ?></td>
	    <td><?= htmlspecialchars($areaop['AD<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['MBP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['AP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['BT<2'], ENT_QUOTES, 'UTF-8'); ?></td>	
		<td><?= htmlspecialchars($areaop['RBP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		<td><?= htmlspecialchars($areaop['RAP<2'], ENT_QUOTES, 'UTF-8'); ?></td>
		
		<td align="center"><?= htmlspecialchars($areaop['Controlados >2'], ENT_QUOTES, 'UTF-8'); ?></td>
	    <td><?= htmlspecialchars($areaop['AD>2'], ENT_QUOTES, 'UTF-8'); ?></td>
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




