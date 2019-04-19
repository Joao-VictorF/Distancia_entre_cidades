<!DOCTYPE html>
<html>
	<head>
		<title>Distancia entre as cidades</title>
		<meta charset="utf-8">
		<link href="css/index.css" rel="stylesheet">  
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="shortcut icon" href="img/map.png" />
	</head>
	<body>
		<?php
			session_start();
			$_SESSION["primeira"] = $_POST["cidades1"];
			$_SESSION["segunda"] = $_POST["cidades2"];

			$cidades = array("Fortaleza", "Russas", "Jaguaribe", "Icó", "Milagres", "Brejo Santo");
			$km = array("0", "165", "308", "375", "475", "510");
			$url = array('img/fortaleza.jpg', 'img/russas.jpg', 'img/jaguaribe.jpg', 'img/ico.jpg', 'img/milagres.jpg', 'img/brejo.jpg');
			$descrição = array(
				'Está localizada no litoral Atlântico, a uma altitude média de dezesseis metros, com 34 km de praias. Fortaleza possui 313,140 km² de área e 2 643 247 habitantes estimados em 2018, além da maior densidade demográfica entre as capitais do país, com 8 390,76 hab/km². É a maior cidade do Ceará em população e a quinta do Brasil. A Região Metropolitana de Fortaleza é a sexta mais populosa do Brasil e a primeira do Norte e Nordeste, com 4 051 744 habitantes em 2017. É a cidade nordestina com a maior área de influência regional e possui a terceira maior rede urbana do Brasil em população, atrás apenas de São Paulo e do Rio de Janeiro.',
				'Russas é um município brasileiro do estado do Ceará. Está localizado na mesorregião do Jaguaribe, na microrregião do Baixo Jaguaribe. É conhecida como a "Terra da Laranja", "Terra de Dom Lino" e "Capital do Vale".',
				'Jaguaribe é um município brasileiro do estado do Ceará. Sua população estimada, de acordo com estudo de estimativa populacional realizado pelo IBGE, em 2014, era de 34.621 habitantes. A sua área territorial é de 1877 km², o que corresponde a uma densidade de 18,4 hab/km². Cerca de 55% dos munícipes se localizam na área urbana da sede do município, o que indica que a cidade possui cerca de 19.041 habitantes. Jaguaribe é o 53º município mais populoso do Estado do Ceará.',
				'Icó é um município brasileiro do estado do Ceará. A cidade de Icó foi a terceira vila instalada no Ceará e possui um sítio arquitetônico datado do século XVIII.',
				'Milagres é um município brasileiro do estado do Ceará. O Instituto Brasileiro de Geografia e Estatística em 2018 estimou sua população em 28.446 habitantes. Tem um único distrito, Podimirim, localizado às margens da CE-293, na via que faz a ligação entre a cidade de Milagres e a de Juazeiro do Norte',
				'Brejo Santo é um município brasileiro do estado do Ceará, localizado na microrregião de Brejo Santo e mesorregião do Sul Cearense. Sua população, conforme estimativas do IBGE de 2018, era de 49 109[3] habitantes.'
			);

			$distancia = $km[$_SESSION["primeira"]] - $km[$_SESSION["segunda"]];
			if ($distancia < 1) 
				$distancia *= -1;
		?>

		<h1 class="text title"> 
			<?php 
				echo 'A distância entre ' . $cidades[$_SESSION["primeira"]] . ' e ' . 
				$cidades[$_SESSION["segunda"]] . ' é ' . $distancia . ' KM.'; 
			?> 
		</h1>

			<div class="card">
				<div class="card-items">
					<h3 class="text">
						<?php echo $cidades[$_SESSION["primeira"]]; ?>		 
					</h3>
					<img class="img" src="<?php echo $url[$_SESSION["primeira"]]; ?>">
					<p class="descricao">
						<?php 
							echo $descrição[$_SESSION["primeira"]];
						?>
					</p>
				</div>

				<br>

				<div class="card-items">
					<h3 class="text">
						<?php echo $cidades[$_SESSION["segunda"]]; ?>		 
					</h3>	
					<img class="img" src="<?php echo $url[$_SESSION["segunda"]]; ?>">
					<p class="descricao">
						<?php 
							echo $descrição[$_SESSION["segunda"]];
						?>
					</p>
				</div>
			</div>
	</body>
</html>