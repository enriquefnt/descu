

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
print_r($registro);

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


		
