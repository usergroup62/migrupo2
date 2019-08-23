<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
echo "<h1>Registro de Color</h1>";
echo "Color: " .$_POST['color1']."<br>";

if ( strcmp ( $_POST['color1'], "") !=0)
{
//instrucciones para insertar
$instruccion="insert into Colores(Color)values
('{$_POST['color1']}')";

$r=mysql_query($instruccion,$c);
echo "<br>Registro Guardado";
}

else
           echo "<br>Registro no Guardado, Faltan Datos";
           
?>