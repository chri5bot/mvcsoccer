<?php
	if (isset($opcion)){
		include './modelo/conexion.php';
		$conexion = new conexion();
		if ($opcion=="principal"){
			return "Christian Torres";
		}
		else if ($opcion=="prueba"){
			include './modelo/modPrueba.php';
			include './vista/visPrueba.php';
			$modPrueba = new modPrueba($conexion);
			$visPrueba = new visPrueba(); 
			$return=$visPrueba->listarPrueba($modPrueba->listarPrueba());
			return "pagina de prueba<br/><hr/><br/>".$return;
		}
		else if ($opcion=="equipo"){
			include './modelo/modEquipo.php';
			include './vista/visEquipo.php';
			$modEquipo = new modEquipo($conexion);
			$visEquipo = new visEquipo();
            $visEquipoCategoria = new visEquipoCategoria();
			$return=$visEquipo->listarEquipos($modEquipo->listarEquipos());
            $return2=$visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoCategoria());
			return "pagina de prueba<br/><hr/><br/>".$return2;
		}
		else{
			header('Location: index.php');
		}
	}
	else{
			echo "no tiene permisos";
		}
	