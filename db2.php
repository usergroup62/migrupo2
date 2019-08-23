<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
echo "<h1>Registro de Personas</h1>";
echo "Nombre: {$_POST['nombre1']}<br>";
echo "Edad: " . $_POST['edad1'] . "<br>";
echo "Color: {$_POST['color1']}<br>";
echo "Deporte: " .$_POST['deporte1']."<br>";

$sql="select Instructor from Deportes where Deporte = '{$_POST['deporte1']}'";
$r=mysql_query($sql,$c);
$instructor1="";
while($arr=mysql_fetch_array($r)){
       $instructor1 = $arr['Instructor'];
       }
echo "Instructor: ";
echo $instructor1;


if ( strcmp ( $_POST['nombre1'], "") !=0)
{
//instrucciones para insertar
$instruccion="insert into Persona(Nombre,Edad,Color,Deporte,Instructor)values
('{$_POST['nombre1']}','{$_POST['edad1']}','{$_POST['color1']}',
'{$_POST['deporte1']}','$instructor1')";

$r=mysql_query($instruccion,$c);
echo "<br>Registro Guardado";
}

else
           echo "<br>Registro no Guardado, Faltan Datos";
           
?>
