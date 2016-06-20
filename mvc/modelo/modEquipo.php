<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 19/06/2016
 * Time: 15:13
 */
    class modEquipo{
        private $con;
        public function __construct($conexion){
            $this->con=&$conexion;
        }
        
        public function listarEquipos(){
            $sql = "select * from club;";
            $info = array();
            $sqlPreparada = $this->con->prepararSentencia($sql, $info);
            $lista=$sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function listarEquipoCategoria(){
            $sql = "select c.ID_CLUB as ID_CLUB, c.NOM_CLUB as NOM_CLUB, 
                    rel.ID_CAT as ID_CAT, cat.NOM_CAT as NOM_CAT
                    from club as c 
                    INNER join relationship_31 as rel
                    on c.ID_CLUB = rel.ID_CLUB
                    INNER join categoria as cat
                    on rel.ID_CAT = cat.ID_CAT
                    WHERE cat.ID_CAT=1;";
            $info = array();
            $sqlPreparada = $this->con->prepararSentencia($sql, $info);
            $lista=$sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }
        public function listarEquipoSenior(){
            $sql = "select c.ID_CLUB as ID_CLUB, c.NOM_CLUB as NOM_CLUB, 
                    rel.ID_CAT as ID_CAT, cat.NOM_CAT as NOM_CAT
                    from club as c 
                    INNER join relationship_31 as rel
                    on c.ID_CLUB = rel.ID_CLUB
                    INNER join categoria as cat
                    on rel.ID_CAT = cat.ID_CAT
                    WHERE cat.ID_CAT=2;";
            $info = array();
            $sqlPreparada = $this->con->prepararSentencia($sql, $info);
            $lista=$sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }
        public function listarEquipoMasculino(){
            $sql = "select c.ID_CLUB as ID_CLUB, c.NOM_CLUB as NOM_CLUB, 
                    rel.ID_CAT as ID_CAT, cat.NOM_CAT as NOM_CAT
                    from club as c 
                    INNER join relationship_31 as rel
                    on c.ID_CLUB = rel.ID_CLUB
                    INNER join categoria as cat
                    on rel.ID_CAT = cat.ID_CAT
                    WHERE cat.ID_CAT=3;";
            $info = array();
            $sqlPreparada = $this->con->prepararSentencia($sql, $info);
            $lista=$sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }
        public function listarEquipoFemenino(){
            $sql = "select c.ID_CLUB as ID_CLUB, c.NOM_CLUB as NOM_CLUB, 
                    rel.ID_CAT as ID_CAT, cat.NOM_CAT as NOM_CAT
                    from club as c 
                    INNER join relationship_31 as rel
                    on c.ID_CLUB = rel.ID_CLUB
                    INNER join categoria as cat
                    on rel.ID_CAT = cat.ID_CAT
                    WHERE cat.ID_CAT=4;";
            $info = array();
            $sqlPreparada = $this->con->prepararSentencia($sql, $info);
            $lista=$sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }

    }