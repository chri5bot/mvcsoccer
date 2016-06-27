<?php
if (isset($opcion)) {
    include './modelo/conexion.php';
    $conexion = new conexion();
    if ($opcion == "principal") {
        return "Christian Torres";
    } else if ($opcion == "prueba") {
        include './modelo/modPrueba.php';
        include './vista/visPrueba.php';
        $modPrueba = new modPrueba($conexion);
        $visPrueba = new visPrueba();
        $return = $visPrueba->listarPrueba($modPrueba->listarPrueba());
        return "pagina de prueba<br/><hr/><br/>" . $return;
    } else if ($opcion == "equipo") {
        include './modelo/modEquipo.php';
        include './vista/visEquipo.php';
        $modEquipo = new modEquipo($conexion);
        $visEquipo = new visEquipo();
        $visEquipoCategoria = new visEquipoCategoria();
        $return = $visEquipo->listarEquipos($modEquipo->listarEquipos());
        $returnmaster = $visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoCategoria());
        $returninfantil = $visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoInfantil());
        $returnmaxima = $visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoSeniorMaxima());
        $returnprimera = $visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoSeniorPrimera());
        $returnsegunda = $visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoSeniorSegunda());
        $returnfeme = $visEquipoCategoria->listarEquipoCategoria($modEquipo->listarEquipoFemenino());
        return "<br/>Equipos<br/><hr/><br/>" . $return .
        "<br/>Master<br/><hr/><br/>" . $returnmaster .
        "<br/>Maxima<br/><hr/><br/>" . $returnmaxima .
        "<br/>Primera<br/><hr/><br/>" . $returnprimera .
        "<br/>Segunda<br/><hr/><br/>" . $returnsegunda .
        "<br/>Infantil<br/><hr/><br/>" . $returninfantil .
        "<br/>Femenino<br/><hr/><br/>" . $returnfeme;
//                    "<br/>Senior<br/><hr/><br/>".$returnsenior.
//                    "<br/>Masculino<br/><hr/><br/>".$returnmasculino.
//                    "<br/>Femenino<br/><hr/><br/>".$returnfeme;
    } else {
        header('Location: index.php');
    }
} else {
    echo "no tiene permisos";
}
	