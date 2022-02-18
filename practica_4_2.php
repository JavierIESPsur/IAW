<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php

	/* 2. Imprime en pantalla el cuadrado de los números del 1 al 50, ambos incluidos, y los sume, devolviendo la dicha suma total. Guarda tu trabajo en practica_4_2.php. */


	$cont = 1;
	$sumatorio = 0;

	while ($cont <= 50) {
		$cont++;
		echo "El cuadrado es " . $cont**2 . "<br>";
		$sumatorio	= $sumatorio + $cont**2;
	}

	echo $sumatorio; 


	?>


</body>
</html>
