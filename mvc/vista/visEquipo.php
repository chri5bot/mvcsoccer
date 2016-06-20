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
            $return = "<div class='elementos'>
                        <table border='1'>
                        <tr>
                            <th>ORD.</th>
                            <th>CLUB</td>
                            <th>DEP.</td>
                        </tr>";
            $count = 0;
            foreach ($clubcategoria as $row){
                $count++;
                $return.="<tr>
                            <td>".$count."</td>
                            <td>".$row['NOM_CLUB']."</td>
                            <td>".$row['NOM_DEP']."</td>
                         </tr>";
            }
            $return.= " </table>
                       </div>";
            return $return;
        }
        public function listarEquipoSenior($clubcategoria){
            $return = "<div class='elementos'>
                        <table border='1'>
                        <tr>
                            <th>ORD.</th>
                            <th>CLUB</td>
                            <th>DEP.</td>
                        </tr>";
            $count = 0;
            foreach ($clubcategoria as $row){
                $count++;
                $return.="<tr>
                            <td>".$count."</td>
                            <td>".$row['NOM_CLUB']."</td>
                            <td>".$row['NOM_DEP']."</td>
                         </tr>";
            }
            $return.= " </table>
                       </div>";
            return $return;
        }
        public function listarEquipoMasculino($clubcategoria){
            $return = "<div class='elementos'>
                        <table border='1'>
                        <tr>
                            <th>ORD.</th>
                            <th>CLUB</td>
                            <th>DEP</td>
                        </tr>";
            $count = 0;
            foreach ($clubcategoria as $row){
                $count++;
                $return.="<tr>
                            <td>".$count."</td>
                            <td>".$row['NOM_CLUB']."</td>
                            <td>".$row['NOM_DEP']."</td>
                         </tr>";
            }
            $return.= " </table>
                       </div>";
            return $return;
        }
        public function listarEquipoFemenino($clubcategoria){
            $return = "<div class='elementos'>
                        <table border='1'>
                        <tr>
                            <th>ORD.</th>
                            <th>CLUB</td>
                            <th>DEP</td>
                        </tr>";
            $count = 0;
            foreach ($clubcategoria as $row){
                $count++;
                $return.="<tr>
                            <td>".$count."</td>
                            <td>".$row['NOM_CLUB']."</td>
                            <td>".$row['NOM_DEP']."</td>
                         </tr>";
            }
            $return.= " </table>
                       </div>";
            return $return;
        }
    }