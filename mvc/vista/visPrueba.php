<?php

class visPrueba
{
    public function listarPrueba($pruebas)
    {
        $return = "<div class='elementos'>";
        foreach ($pruebas as $row) {
            $return .= "
				<div class='prueba' id='prueba" . $row['pru_id'] . "'>
					<p>" . $row['pru_contenido'] . "</p>
					<h5>" . $row['pru_fecha'] . "</h5>
				</div>
			";
        }
        $return .= "</div>";
        return $return;
    }
}