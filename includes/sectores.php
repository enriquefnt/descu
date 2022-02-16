<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
 
$areaOP= $_POST['areaoperativa'] ;
$sectores=findAllId($pdo, 'sectores' , 'idaop' , $areaOP );
$cadena="<select id='lista2' name='SEC'>";
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