<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
echo "<h1>Actualizacion de Personas</h1>";
echo "Nombre: {$_POST['nombre1']}<br>";
echo "Edad: " .$_POST['edad1']. "<br>";
echo "Color: {$_POST['color1']}<br>";
echo "Deporte: " .$_POST['deporte1'] . "<br>";

$sql="select Instructor from Deportes where Deporte = '{$_POST['deporte1']}'";
$r=mysql_query($sql,$c);
$instructor1="";
while($arr=mysql_fetch_array($r)){
       $instructor1 = $arr['Instructor'];
       }
echo "Instructor: ";
echo $instructor1;


if ( strcmp ( $_POST['nombre1'] , "" ) !=0 )
{
////instruccion para Modificar
$instruccion="Update Persona set Nombre='{$_POST['nombre1']}',
Edad='{$_POST['edad1']}', Color='{$_POST['color1']}', 
Deporte='{$_POST['deporte1']}', Instructor='$instructor1' 
where Nombre='{$_POST['nombre1']}'";
$r=mysql_query($instruccion,$c);
echo "<br>Registro Actualizado";
}
else
echo "<br>Registro no Guardado, Faltan Datos";
?>
