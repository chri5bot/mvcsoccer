<?php
    class visEquipo{
        public function listarEquipos($clubes){
            $return = "<div class='elementos'>";
            foreach ($clubes as $row){
                $return.="
                    <div class='equipo' id='equipo".$row['ID_CLUB']."'>
                        <table>
                            <tr>
                                <td>".$row['NOM_CLUB']."</td>
                                <td>".$row['ESTADO_CLUB']."</td>
                            </tr>
                        </table>
                    </div>
                ";
            }
            $return.="</div>";
            return $return;
        }
    }
    class visEquipoCategoria{
        public function listarEquipoCategoria($clubcategoria){
            $return = "<div class='elementos'>";
            foreach ($clubcategoria as $row){
                $return.="
                        <div class='equipo' id='equipo".$row['ID_CLUB']."'>
                            <table>
                                <tr>
                                    <td>".$row['NOM_CLUB']."</td>
                                    <td>".$row['NOM_CAT']."</td>
                                    <td>".$row['NOM_DIS']."</td>
                                </tr>
                            </table>
                        </div>
                    ";
            }
            $return.="</div>";
            return $return;
        }
    }