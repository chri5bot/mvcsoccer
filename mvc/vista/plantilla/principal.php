<?php
	return "
		<html>
			<head>
			<meta charset='UTF-8'>
				<title>$graficadorPagina->titulo</title>
				<meta name='description' content='$graficadorPagina->descripcion'/>
				<meta name='keywords' content='$graficadorPagina->palabrasClaves'/>
				$graficadorPagina->head							
			</head>
			<body>	
				$graficadorPagina->contenido
			</body>
		</html>
	";
