
<?php 
#program for demo of conditional statement to check login  
$user=$_POST["t1"]; 
$pass=$_POST["t2"]; 
if($user=="admin" && $pass=="1234") 
{ 
print "<h1>Welcome Admin..</h1><hr>";
 } 
elseif($user=="cocsit" && $pass=="9090") 
{ 
 print "<h1>Welcome cocsit</h1><hr>";
 } 
 else 
 { 
 print "<h1>Login Fail,<br> Please Check again"; 
 } 
?> 
