<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

echo "<h1> Borrado de Personas</h1>";

if ( strcmp ( $_POST['nombre1'], "") !=0)
{
////instruccion para borrar
$instruccion="delete from Persona where Nombre='{$_POST['nombre1']}'";
         $r=mysql_query($instruccion,$c);
echo "<br>Registro Eliminado";
}
else
echo "<br>Registro no se borro, Faltan Datos";
?>