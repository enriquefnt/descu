<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';





//echo '$GLOBALS['idP']' . 'nada';
//echo $_POST['AOP'] . '<br>' ;
$AOPER=$_POST['AOP'] ;

$cadena="<select id='lista2' name='SEC'><option value=0>Indique sector</option>";

$sectores=findAllId($pdo, 'sectores' , 'idaop' , $AOPER );





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