<?php 
include 'includes/autoload.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$userobj = new Userview();
		$userobj->showUser('peter');

		$userobj2 = new Usercontr();
		$userobj2->createUser("julie", "martins", "juliemartins");

	?>
</body>
</html>