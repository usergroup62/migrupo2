<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
echo "<h1>Registro de Deportes</h1>";
echo "Deporte: " .$_POST['deporte1']."<br>";
echo "Instructor: {$_POST['instructor1']}<br>";

if ( strcmp ( $_POST['deporte1'], "") !=0)
{
//instrucciones para insertar
$instruccion="insert into Deportes(Deporte,Instructor)values
('{$_POST['deporte1']}','{$_POST['instructor1']}')";

$r=mysql_query($instruccion,$c);
echo "<br>Registro Guardado";
}

else
           echo "<br>Registro no Guardado, Faltan Datos";
           
?>
