<!DOCTYPE html>
<html>
<head>
	<title>PHP echo Statement</title>
</head>

<body>
	<?php
		$var_name = "FTL (Free Time Learning)";
		$var_website = "www.freetimelearning.com";
		$x = 9;
		$y = 18;
		$z = 27;
		
		echo "<h2>" . $var_name . "</h2>";
		echo "Learn PHP at " . $var_website . "<br /><br />";
		echo $x + $y. "<br /><br />";
		echo $y * $z;
	?>
    
</body>
</html>
