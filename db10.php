<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

echo "<h1> Borrado de Color</h1>";

if ( strcmp ( $_POST['color1'], "") !=0)
{
////instruccion para borrar
$instruccion="delete from Colores where Color='{$_POST['color1']}'";
         $r=mysql_query($instruccion,$c);
echo "<br>Registro ELIMINADO";
}
else
echo "<br>Registro no se borro, Faltan Datos";
?>