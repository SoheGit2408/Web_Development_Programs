<!DOCTYPE html>
<html>
<head>
<title>My Demo Table program page</title>
</head>
<body>
<h1 align="center"> Sample PHP table to display
numbers from 1 to 10 their squares and cubes </h1><hr/><br/>
<table align="center" border="2">
<tr><th> Numbers </th><th> Squares </th><th> Cubes </th></tr>
<?php
for($i=1;$i<=10;$i++)
{
 print"<tr><td>".$i."</td><td>".($i*$i)."</td><td>".($i*$i*$i).
 "</td></tr>";
}
?>
</table>
</body>
</html>
