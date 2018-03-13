<html>
	<head>
		<title>Trabalho</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--Linkando o materialize-->
		<link rel="stylesheet" href="\CSS\materialize\css\materialize.css">
	</head>
	<body>
		<h1>Calcular Área do Círculo</h1>
		<br/>
		<form method ="POST" action="circulo.php">
			<label for="raio">Tamanho do Raio do Cícurlo:</label>
			<input id="raio" type="text" name="raio" placeholder="Digite o tamanho do raio">
			<br/>
			<br/>
			<input type="submit" value="Calcular" name="btnCalcularCirculo">
			<input type="reset" value="Limpar">
		</form>
		<br/>
		<h1>Calcular Área do Trapézio</h1>
		<br/>
		<form method ="POST" action="trapezio.php">
			<label for="altura">Tamanho da Altura:</label>
			<input id="altura" type="text" name="altura" placeholder="Digite o tamanho da altura">
			<br/>
			<br/>
			<label for="basemaior">Tamanho da Base Maior:</label>
			<input id="basemaior" type="text" name="basemaior" placeholder="Digite o tamanho da base maior">
			<br/>
			<br/>
			<label for="basemenor">Tamanho da Base Menor:</label>
			<input id="basemenor" type="text" name="basemenor" placeholder="Digite o tamanho da base menor">
			<br/>
			<br/>
			<input type="submit" value="Calcular" name="btnCalcularTrapezio">
			<input type="reset" value="Limpar">
		</form>
		<form method ="POST" action="losango.php">
			<label>Diagonal Maior:</label>
			<input type="text" name="diagonalmaior" placeholder="Digite o tamanho da diagonal maior">
			</br>
			</br>
			<label>Diagonal Menor:</label>
			<input type="text" name="diagonalmenor" placeholder="Digite sua segunda nota"></br>
			</br>
			<input type="submit" value="Calcular" name="btnCalcularLosango">
			<input type="reset" value="Limpar">
		</form>
		<div class="Cad-panel red">
			Olá mundo
		</div>

		<!--JQuery-->
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<!--materialize-->
		<script type="text/javascript" href="CSS\materialize\js\materialize.js"></script>
	</body>
</html>
