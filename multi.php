<h1>Multiplication Table from 2 to 20</h1><hr>

<table border="1">

<?php

for($i=1;$i<=10;$i++)

{

print "<tr>";

for($j=2;$j<=20;$j++)

{

print "<td>" .($i*$j) ."</td>";

}

print "</tr>";

}

?>
