<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

$sql="select * from Colores where Color='{$_POST['color1']}'";
$r=mysql_query($sql,$c);

echo "<center>";
echo "<h1>Actualizacion de Colores</h1><br>";

      while ($arr=mysql_fetch_array($r))
      {
      echo "<form action=db12.php method=POST>";
echo "Color:<input type=text value={$arr['Color']} name=color1><br><br>";
echo "Color:<input type=text value={$arr['Color']} name=color2><br><br>";
      echo "<input type=submit name=en value=MODIFICAR>";
      echo "</form>";
      }
echo "</center>";
?>