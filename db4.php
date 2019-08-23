<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

$sql="select * from Persona where Nombre='{$_POST['nombre1']}'";
$r=mysql_query($sql,$c);

echo "<center>";
echo "<h1>Actualizacion de Personas</h1><br>";

      while ($arr=mysql_fetch_array($r))
      {
      echo "<form action=db41.php method=POST>";
echo "Nombre:<input type=text value={$arr['Nombre']} name=nombre1><br><br>";
echo "Edad:<input type=text value={$arr['Edad']} name=edad1><br><br>";
echo "Color:<input type=text value={$arr['Color']} name=color1><br><br>";
echo "Deporte:<input type=text value={$arr['Deporte']} name=deporte1><br><br>";


      echo "<input type=submit name=en value=Modificar>";
      echo "</form>";
      }
echo "</center>";
?>