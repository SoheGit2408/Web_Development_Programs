
<?php 
$con=mysql_connect("localhost","root",""); 
mysql_query("use student");
 $login=$_POST["T1"];
  $pass=$_POST["T2"];
   $ds1=mysql_query("select * from password='".$pass ."'",$con); 
   if (mysql_numrows($ds1) != 0)
    { 
    echo "<h1 align=center>Login Success:</h1><hr>";
    
    } 
    else { 
    echo "<h1  align=center>Login Fail:</h1><hr>";
    } 
    ?> 
