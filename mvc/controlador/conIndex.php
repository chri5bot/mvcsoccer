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
            $returnmaster=$visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoCategoria());
            $returnsenior=$visEquipoCategoria->listarEquipoSenior($modEquipo->listarEquipoSenior());
            $returnmasculino=$visEquipoCategoria->listarEquipoMasculino($modEquipo->listarEquipoMasculino());
            $returnfeme=$visEquipoCategoria->listarEquipoFemenino($modEquipo->listarEquipoFemenino());
			return  "<br/>Master<br/><hr/><br/>".$returnmaster.
                    "<br/>Senior<br/><hr/><br/>".$returnsenior.
                    "<br/>Masculino<br/><hr/><br/>".$returnmasculino.
                    "<br/>Femenino<br/><hr/><br/>".$returnfeme;
        }
		else{
			header('Location: index.php');
		}
	}
	else{
			echo "no tiene permisos";
		}
	