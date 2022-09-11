<?php
function cube($r){
    return $r*$r*$r;
}
for($i=1;$i<=20;$i++){
    echo "The cube of $i is:".cube($i);
    echo "<br/>";
}
?>