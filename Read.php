<html>
<body>
 <h1 align="center"> Array Demo, Getting Array Elements From User </h1><hr> 
 <form action="Read1.php"> 
 <table border="1" align="center">
 <?php 
 $size=$_REQUEST["t1"];
 print "<tr><td>Size Given </td><td> <input type=text readonly name=size 
 value=$size></td></tr>"; 
 for($i=1;$i<=$size;$i++)
 { 
 ?> 
 <tr><td>Enter <?php print $i;
  ?> : Array Elements:</td><td><input type="text" name="t<?php
 print $i;?>"></td></tr> 
 <?php 
 }
 ?> 
 <tr><td></td><td><input type="submit" name="b1" value=".....OK .... "></td></tr> 
 </form> 
 </body> 
 </html>
