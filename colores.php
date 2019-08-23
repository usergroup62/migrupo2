<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);

$sql="select * from Colores";
$r=mysql_query($sql,$c);
echo "Tabla de Colores";
echo "<center><table border=1>";

         while ($arr=mysql_fetch_array($r))
         {
         echo "<tr>";

         echo "<td width=100>" . $arr['Color'] . "</td>";
         echo "</tr>";
         }
echo "</table></center>";

?>

<br>
<h1 aling=center>Registro de un Color</h1>
<form action=db9.php method=POST>
           Color:<input type="text" name=color1><br><br>
           <input type=submit name=en value=Agregar>
</form>

<br>
<h1 aling=center>Borrar un Color</h1>
<form action=db10.php method=POST>
         Color:<select name=color1>
           <option value="0">Color:</option> 
           <?php
           $sql="select * from Colores";
           $r=mysql_query($sql,$c);
           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Color].'">'.$arr[Color].'</option>';
           }
          ?>
           </select><br><br>
         <input type=submit name=en value=Borrar>
</form>


<br>
<h1 aling=center>Modificar Color</h1>
<form action=db11.php method=POST>
         Color:<select name=color1>
           <option value="0">Color:</option> 
           <?php
           $sql="select * from Colores";
           $r=mysql_query($sql,$c);
           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Color].'">'.$arr[Color].'</option>';
           }
          ?>
           </select><br><br>
         <input type=submit name=en value=Modificar>
</form><br><br><br>.


