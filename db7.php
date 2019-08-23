<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

$sql="select * from Deportes where Deporte='{$_POST['deporte1']}'";
$r=mysql_query($sql,$c);

echo "<center>";
echo "<h1>Actualizacion de Deportes</h1><br>";

      while ($arr=mysql_fetch_array($r))
      {
      echo "<form action=db8.php method=POST>";
echo "Deporte:<input type=text value={$arr['Deporte']} name=deporte1><br><br>";
echo "Instructor:<input type=text value={$arr['Instructor']} name=instructor1><br><br>";

      echo "<input type=submit name=en value=Modificar>";
      echo "</form>";
      }
echo "</center>";
?>