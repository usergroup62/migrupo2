<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
echo "<h1>Actualizacion de Deportes</h1>";
echo "Deporte: {$_POST['deporte1']}<br>";
echo "Instructor: " .$_POST['instructor1']. "<br>";

if ( strcmp ( $_POST['deporte1'] , "" ) !=0 )
{

////instruccion para Modificar
$instruccion="Update Deportes set Deporte='{$_POST['deporte1']}',
Instructor='{$_POST['instructor1']}'
where Deporte='{$_POST['deporte1']}'";
$r=mysql_query($instruccion,$c);
echo "<br>Registro Actualizado";
}
else
echo "<br>Registro no Guardado, Faltan Datos";
?>