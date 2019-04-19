<!DOCTYPE html>
<html>
	<head>
		<title>Distancia entre as cidades da Br 116</title>
		<meta charset="utf-8">
		<link href="css/index.css" rel="stylesheet">  
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="shortcut icon" href="img/map.png" />
		<meta name="theme-color" content="#64B5F6">
		<meta name="apple-mobile-web-app-status-bar-style" content="#64B5F6">
		<meta name="msapplication-navbutton-color" content="#64B5F6">
	</head>
	<body>
		<h1 class="text title"> Distância entre cidades da BR 116 </h1>
		<form action="saveSession.php" method="POST">
			<div class="card">
				<div class="card-items">
					<h3 class="text">	Escolha uma cidade de origem </h3>
					<select id="selectbox" name="cidades1" required style="margin-left: 120px;">
						<option value="" selected="selected" disabled="disabled">Cidade</option>
						<option value="0">Fortaleza</option>
						<option value="1">Russas</option>
						<option value="2">Jaguaribe</option>
						<option value="3">Icó</option>
						<option value="4">Milagres</option>
						<option value="5">Brejo Santos</option>
					</select>

					
				</div>
				<br>
				<div class="card-items">
					<h3 class="text">	Escolha uma cidade de destino </h3>
					<select id="selectbox" name="cidades2" required style="margin-left: 120px;">
						<option value="" selected="selected" disabled="disabled">Cidade</option>
						<option value="0">Fortaleza</option>
						<option value="1">Russas</option>
						<option value="2">Jaguaribe</option>
						<option value="3">Icó</option>
						<option value="4">Milagres</option>
						<option value="5">Brejo Santos</option>
					</select>

		
				</div>
			</div>

			<button type="submit" class="submit-btn text">Calcular distância!</button>
		</form>
		
	</body>
</html>