<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
 

//$datoPersona = $pdo->query('SELECT * FROM persona inner join sectores on SEC=idSector where idPersona=$_GET['id']');



$cadena="<select id='lista2' name='SEC'><option value=0>Indique sector</option>";

$sectores=findAllId($pdo, 'sectores' , 'idaop' , $_POST['AOP'] );





if (count($sectores)>0){
foreach($sectores as $sec) 


{
        $cadena=$cadena.'<option value='.$sec['idSector'].'>'.utf8_encode($sec['Sector']).'</option>';
    }




}

else {
    echo "Sin Datos";
}

echo  $cadena."</select>";




?>