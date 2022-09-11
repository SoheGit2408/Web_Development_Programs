<!DOCTYPE html>
<html>
<head>
	<title>PHP Magic Constants</title>
</head>
<?php   
    $dec1 = 34;  
    $oct1 = 0243;  
    $hexa1 = 0x45;  
    echo "Decimal number: " .$dec1. "</br>";  
    echo "Octal number: " .$oct1. "</br>";  
    echo "HexaDecimal number: " .$hexa1. "</br>";  
?>  



<body>

<?php
	echo "The Line number : ". __LINE__;
?>
<hr />
<?php
	echo  "The file name : ". __FILE__;
?>
<hr />
<?php
class Magic_Constants 
{
function FreeTimeLearn()
{
echo "Function : ". __FUNCTION__ ."<hr/>"; 
} 
function free_timt_learn()
{
echo "Class : ". __CLASS__."<hr/>";
echo "Method : ". __METHOD__ ;
				
} 
}
$object=new Magic_Constants();
$object->FreeTimeLearn();
$object->free_timt_learn();
 
?>

</body>
</html>