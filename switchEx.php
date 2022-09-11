<!DOCTYPE html>
<html>
<body>
<?php
$d=date("D");
switch($d){
case "Mon":
echo"Today is Monday.";
break;
case "Tue":
echo "Today is Tuesday.";
break;
case "Wed":
echo "Today is Wensday.";
break;
case "Thu":
echo "Today is Thursday.";
break;
case "Fri":
echo " Today is Friday.";
break;
case "Sat":
echo "Today is Saturday.";
break;
case "Sun":
echo "Today is Sunday.";
break;
default:
echo "Wonder which day you will find";
}
?>
</body>
</html>
