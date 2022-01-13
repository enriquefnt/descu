
<body>
	<fieldset>
      <legend>Sectores</legend>
<form method="POST">
        
        <label for="AOP">Area Operativa:</label><br>

<select name="AOP" required="required" id="AOP">


<option  type="number" value="<?=$_SESSION['AOP'] ?? ''?>">
  <?=$_SESSION['AreaOperativa'] ?? ''?>
</option>


<?php
$aop = [];
  foreach ($result as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
</select><br><br>
        <br>

<label for="Apellido">Sector:</label><br>
  <input type="text" required="required" id="sector" name="sector" placeholder="sector" autocomplete="off" value=""><br><br>


      <input type="submit"  class="w3-button w3-black" value="Cargar">
    </form>
</fieldset>
  
</body>
</html>
