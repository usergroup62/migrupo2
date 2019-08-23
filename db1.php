<body  leftmargin=100>

      <a href=deportes.php>Deportes</a><br>
      <a href=colores.php>Colores</a><br>

</body>


<?php
$c=mysql_connect("mysql.webcindario.com","pagwebbdd","alma151299");
mysql_select_db("pagwebbdd",$c);
$sql="select * from Persona";
$r=mysql_query($sql,$c);
echo "Registros";
echo "<center><table border=1>";

         while ($arr=mysql_fetch_array($r))
         {
         echo "<tr>";
         echo "<td width=100>" . $arr['Nombre'] . "</td>";
         echo "<td width=100>" . $arr['Edad'] . "</td>";
         echo "<td width=100>" . $arr['Color'] . "</td>";
         echo "<td width=100>" . $arr['Deporte'] . "</td>";
         echo "<td width=100>" . $arr['Instructor'] . "</td>";
         echo "</tr>";
         }
echo "</table></center>";

?>

<br>
<h1 aling=center>Registro de una Persona</h1>
<form action=db2.php method=POST>
           Nombre:<input type="text" name=nombre1><br><br>
           Edad:<select name=edad1><?php
for ($i = 5; $i < 101; ++$i) { ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php }
?></select><br><br> 
           
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
           Deporte:<select name=deporte1>
           
           <option value="0">Deporte:</option> 
           <?php
           $sql="select * from Deportes" ;
           $r=mysql_query($sql,$c);

           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Deporte].'">'.$arr[Deporte].'</option>';
          
           }
          
           ?>
           
</select><br><br>

           
           <input type=submit name=en value=Agregar>
</form>

<br>
<h1 aling=center>Borrar de una Persona</h1>
<form action=db3.php method=POST>
         Nombre:<select name=nombre1>
           <option value="0">Nombre:</option> 
           <?php
           $sql="select * from Persona";
           $r=mysql_query($sql,$c);
           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Nombre].'">'.$arr[Nombre].'</option>';
           }
          ?>
           </select><br><br>
         <input type=submit name=en value=Borrar>
</form>

<br>
<h1 aling=center>Modificar a una Persona</h1>
<form action=db4.php method=POST>
         Nombre:<select name=nombre1>
           <option value="0">Nombre:</option> 
           <?php
           $sql="select * from Persona";
           $r=mysql_query($sql,$c);
           while ($arr=mysql_fetch_array($r)){
           echo '<option value="' .$arr[Nombre].'">'.$arr[Nombre].'</option>';
           }
          ?>
           </select><br><br>
         <input type=submit name=en value=Modificar>
</form><br><br><br>.



