<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

echo "<h1> Borrado de Deporte</h1>";

if ( strcmp ( $_POST['deporte1'], "") !=0)
{
////instruccion para borrar
$instruccion="delete from Deportes where Deporte='{$_POST['deporte1']}'";
         $r=mysql_query($instruccion,$c);
echo "<br>Registro Eliminado";
}
else
echo "<br>Registro no se borro, Faltan Datos";
?>