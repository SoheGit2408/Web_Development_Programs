<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Types - Objects</title>
</head>

<body>
	<?php
		class Website{
			function Website(){
				$this->model = "www.freetimelearning.com";
			}
		}
		// create an object
		$my_site = new Website();
		
		// show object properties
		echo $my_site->model;
	?>
</body>
</html>
