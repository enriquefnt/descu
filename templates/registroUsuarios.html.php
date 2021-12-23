
<!--
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `areaoperativa` int(2) DEFAULT NULL,
  `profesión` int(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-->

<div>
    <fieldset >
      <legend>Registro de Usuarios</legend>
<form class="w3-group w3-light-grey" action="registroUsuarios.php" method="post" >
    <label for="Nombre">Nombre:</label><br>
  <input type="text" required="required" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off" value=""><br><br>
  <label for="Apellido">Apellido:</label><br>
  <input type="text" required="required" id="apellido" name="apellido" placeholder="Apellido" autocomplete="off" value=""><br><br>



  <label for="profesion">Profesión:</label><br>
  <select name="profesion" id="profesion" value="-------">
    <option value='1'>Enfermería</option>
    <option value='2'>Nutrición</option>
    <option value='3'>Medicina</option>
    <option value='4'>Agente Sanitario</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
    <br><br>

<label for="AOP">Area Operativa:</label><br>
<select name="AOP" required="required" id="AOP">
<option value=0>Seleccione AOP</option>
    <?php
$aop = [];
  foreach ($result as $aop) {
 echo '<option value=' .  $aop['idaop'].'>' . $aop['areaoperativa'] .'</option>';
  }
?>
<br><br>
  <label for="email">Correo electronico:</label><br>
  <input type="text" required="required" id="email" name="email" placeholder="Correo electrónico" autocomplete="off" value=""><br><br>
  </select><br><br>
<label for="usuario">Usuario:</label><br>
  <input type="text" required="required" id="ususario" name="usuario" placeholder="Elija nombre de usuario" autocomplete="off" value=""><br><br>
  </select>
<label for="password">Contraseña:</label><br>
  <input type="text" required="required" id="password" name="password" placeholder="Elija una contraseña" autocomplete="off" value=""><br><br>
  
  <input type="submit"  class="w3-button w3-black" value="Cargar">
</fieldset>
</div>