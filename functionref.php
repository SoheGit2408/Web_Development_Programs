<?php
function adder(&$str1){
    $str1.=' call by reference';
    
}
$str='Hello';
adder($str);
echo $str;
?>