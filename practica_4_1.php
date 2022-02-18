<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php

	/*1. Imprime en pantalla  los números impares del 1 al 100, y su suma. */


	for ($x = 0; $x <= 100 ; $x++) { 
		if (($x % 2) == 1) {
			echo "Numero impar es $x <br>";
			$c = $x + $c;
		}
		
	}
	echo "<br>";
	echo "La suma es $c";

	?>


</body>
</html>

