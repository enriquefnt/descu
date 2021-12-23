<!--
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `areaoperativa` int(2) DEFAULT NULL,
  `profesión` int(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-->


<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';

 try {




if (isset($_POST['nombre'])) {

$registro = [
      	 			'nombre' => ucwords(strtolower($_POST['nombre'])),
      				'apellido' => ucwords(strtolower($_POST['apellido'])),
              'profesion' => $_POST['profesion'],
      				'AOP' => $_POST['AOP'],
      				'email' => strtolower($_POST['email']),
      				'usuario' => $_POST['usuario'],
      				'password' => $_POST['password']];



echo $registro['apellido'];echo $registro['AOP']; echo $registro['password'];

insert ($pdo, 'usuarios', $registro);
session_unset();
header('Location: /../descu/includes/seRegistroUsuario.php')	;	 


}



   

$result = findAll($pdo, 'aopzonas' ,'areaoperativa');
 $title = 'Carga Usuarios';
 

ob_start();
include __DIR__ . '/../templates/registroUsuarios.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>


		
