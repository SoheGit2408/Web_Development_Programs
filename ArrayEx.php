<?php
// creating array 
$season=array("summer","winter","spring","automn","rainy");

foreach($season as $element){
    echo "$element <br/><br/>";
    
}
//Associative array creation
$employee=array("Name"=>"Sohel Ansar Shaikh",
                "email"=>"sohelshaikh749875@gmail.com",
                "age"=>21,
                "gender"=>"Male");
   
  foreach($employee as $key=>$element){
      echo $key.":".$element;
      echo "<br/>";
  }
?>