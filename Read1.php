<html>
<body> 
<h1 align="center"> Array Demo, Getting Array Elements From User </h1><hr> 
<table border="1" align="center"> 
<tr><td>Given Array Elements Are </td></tr> 
<?php $size=$_REQUEST["size"]; 
for($i=1;$i<=$size;$i++)
 { 
 $a[$i]=$_REQUEST["t$i"]; 
 }
 $sum=0; 
 for($i=1;$i<=$size;$i++) 
 { 
 $sum=$sum +$a[$i]; 
 print "<tr><td align=center>$a[$i] </td></tr>"; 
 }
  print "<tr><td>Sum of Given Array Elements is:$sum </td></tr>";
  ?> 
</body> 
</html>
