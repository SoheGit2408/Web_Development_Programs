<html>
<body>
<?php
print "Sohel<br> <Arbaz";
print "<br> amit&lt;ram";
print"<h2>Basic Structure of HTML Program</h2><hr>"; 
$str1="<html>";
 $str2="<head><title>PageTitle</title></head>";
  $str3="<body>Body Text";
 $str4="<html>";
   
   $s5= "<body>";
   $s1 = htmlspecialchars($str1);
   $s2 = htmlspecialchars($str2); 
   $s3 = htmlspecialchars($str3); 
   $s4 = htmlspecialchars($str4);
   print "<h3>$s1";
   print "<h3>$s2"; 
   print "<h3>$s3"; 
   print "<h3>$s4";   
$input = '<p>Courses are running at COCSIT are </p> <UL> <li>BCA <li> B.ScCS <UL>'; 
print $input; 
$output = strip_tags($input); 
print $output; 
$str="COCSIT Latur is great.";
$part1=substr($str,7,5);
$part2=substr($str,8,5);
$part3=substr($str,1);
$part4=substr($str,0);


print"<br>$part1";
print"<br>$part2";
print"<br>$part3";
print"<br>$part4";
$rno=20; 
$name="Ram"; 
printf("<br>Rno=%d,name=%s",$rno,$name); 
echo strtolower("<br> Hello WORLD. <br> My Name is Sohel<br>");
echo strrev("Sohel Ansar Shaikh");
echo "<br>";
echo str_repeat('-',50);
echo str_repeat("<br>Sohel",10);
echo'['.str_pad('COCSIT',15,'.',STR_PAD_LEFT)."]<br>";
echo'['.str_pad('COCSIT',17,'.',STR_PAD_BOTH)."]<br>";


?>
