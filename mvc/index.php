<?php 
	require './controlador/graficador.php';
	$graficadorPagina = new graficador();
	$graficadorPagina->titulo="Ejemplo";
	$graficadorPagina->descripcion="Este es un ejemplo";
	$graficadorPagina->palabrasClaves="Ejemplo, otros";
	
	if (filter_input(INPUT_GET, 'cont') != null){
		$opcion = filter_input(INPUT_GET, 'cont');
	}
	else{
		$opcion = "principal";
	}
	$graficadorPagina->contenido=include_once './controlador/conIndex.php';
	$pagina= include_once './vista/plantilla/principal.php';
	echo $pagina;