<!DOCTYPE html>
<html>
<head>
	<title>vetores</title>
</head>
<body>

	<?php

		$cidades = array("fortaleza,","russas","jaguaribe","ico","milagres","brejos santos");
		$km = array("0","165","308","375","475","510");

		$distancias = array_combine($cidades, $km);
		var_dump($distancias[0]);

	?>

</body>
</html>