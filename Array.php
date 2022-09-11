
<!DOCTYPE html>
 <html>
  <head> 
  	<title>PHP Indexed (or) Numeric arrays</title> 
  	</head> 
  	<body> 
  	<?php
 $books = array("HTML5", "CSS3", "JavaScript", "Bootstrap", "PHP");
  echo "<b>Web Development Books :</b> " .$books[0]. ", " .$books[1]. "," .$books[2]. ", " .$books[3]. " and " .$books[4].".";
   ?> 
   <hr /> 
   <p>PHP Array - <b>count()</b> Function</p>
    <?php
 	echo count($books);
 	 ?> 
 	 </body>
 	  </html>
