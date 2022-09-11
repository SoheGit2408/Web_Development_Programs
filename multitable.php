<html>
<body>
<h1> Multiplication Table from 1 to 30 </h1><hr>
<table border="1">
<?php
for($i=1;$i<=10;$i++)
{
 print"<tr>";
 for($j=1;$j<=30;$j++)
 {
  print"<td>".($i*$j)."</td>";
 }
 print"</tr>";
}
?>
</table>
</body>
</html>
