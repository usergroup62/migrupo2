<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
$sql="select * from Deportes";
$r=mysql_query($sql,$c);
echo "Tabla de Deportes";
echo "<center><table border=1>";

         while ($arr=mysql_fetch_array($r))
         {
         echo "<tr>";

         echo "<td width=100>" . $arr['Deporte'] . "</td>";
         echo "<td width=100>" . $arr['Instructor'] . "</td>";
         echo "</tr>";
         }
echo "</table></center>";

?>
<br>
<h1 aling=center>Registro de un Deporte</h1>
<form action=db5.php method=POST>
           Deporte:<input type="text" name=deporte1><br><br>
           Instructor:<input type="text" name=instructor1><br><br>
           <input type=submit name=en value=Agregar>
</form>

<br>
<h1 aling=center>Borrar de un Deporte</h1>
<form action=db6.php method=POST>
         Deporte:<select name=deporte1>
           <option value="0">Deporte:</option> 
           <?php
           $sql="select * from Deportes";
           $r=mysql_query($sql,$c);
           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Deporte].'">'.$arr[Deporte].'</option>';
           }
          ?>
           </select><br><br>
         <input type=submit name=en value=Borrar>
</form>

<br>
<h1 aling=center>Modificar Deporte</h1>
<form action=db7.php method=POST>
         Deporte:<select name=deporte1>
           <option value="0">Deporte:</option> 
           <?php
           $sql="select * from Deportes";
           $r=mysql_query($sql,$c);
           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Deporte].'">'.$arr[Deporte].'</option>';
           }
          ?>
           </select><br><br>
         <input type=submit name=en value=Modificar>
</form><br><br><br>.
