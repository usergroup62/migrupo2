<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
echo "<h1>Actualizacion de Colores</h1>";
echo "Color: {$_POST['color1']}<br>";
echo "Color: {$_POST['color2']}<br>";

if ( strcmp ( $_POST['color1'] , "" ) !=0 )
{
////instruccion para Modificar
$instruccion="Update Colores set Color='{$_POST['color1']}' where Color='{$_POST['color2']}'";
$r=mysql_query($instruccion,$c);
echo "<br>Registro Actualizado";
}
else

echo "<br>Registro no Guardado, Faltan Datos";
?>