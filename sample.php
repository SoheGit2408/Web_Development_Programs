
<!DOCTYPE html> 
<html> 
<head> 	
<title>Static Keyword</title> 
</head>
 <body> 
 	<?php 		
 	 function Sample() { 			static $x = 3; 	
 	 		echo $x; 	
 	 				$x++; 		} 		
 	 		 		Sample(); 		
 	 		 		echo "<br>"; 
 	 		 		Sample(); 	
 	 		 		echo "<br>"; 		
 	 		 		Sample(); 	
 	 		 		?> 
 	 		 		</body>
 	  </html>
