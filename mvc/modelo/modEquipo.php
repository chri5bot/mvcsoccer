<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 19/06/2016
 * Time: 15:13
 */
class modEquipo
{
    private $con;

    public function __construct($conexion)
    {
        $this->con =& $conexion;
    }

    public function listarEquipos()
    {
        $sql = "select * from club;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listarEquipoCategoria()
    {
        $sql = "SELECT C.ID_CLUB AS ID_CLUB, C.NOM_CLUB AS NOM_CLUB,
                    REL.ID_CAT AS ID_CAT, CAT.NOM_CAT AS NOM_CAT,
                    SP.CED_DEP AS CED_DEP, DP.NOM_DEP AS NOM_DEP,
                    DJV.NTARJA_DETV AS AMA, DJV.NTARJR_DETV AS ROJ
                    FROM CLUB AS C
                    INNER JOIN SER_PARTE AS SP
                    ON C.ID_CLUB = SP.ID_CLUB
                    INNER JOIN DEPORTISTA AS DP
                    ON DP.CED_DEP = SP.CED_DEP
                    INNER JOIN RELATIONSHIP_25 AS REL
                    ON DP.CED_DEP = REL.CED_DEP
                    INNER JOIN CATEGORIA AS CAT
                    ON REL.ID_CAT = CAT.ID_CAT
                    INNER JOIN CAMBIO AS CAM
                    ON CAM.CED_DEP = DP.CED_DEP
                    INNER JOIN DETALLE_JUGADOR_VOCALIA AS DJV
                    ON CAM.ID_DETV = DJV.ID_DETV
                    WHERE CAT.ID_CAT=1;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listarEquipoSeniorMaxima()
    {
        $sql = "SELECT  C.NOM_CLUB AS NOM_CLUB,
                            DP.NOM_DEP AS NOM_DEP,
                            DJV.NTARJA_DETV AS AMA, DJV.NTARJR_DETV AS ROJ
                            FROM CLUB AS C
                            INNER JOIN SER_PARTE AS SP
                            ON C.ID_CLUB = SP.ID_CLUB
                            INNER JOIN DEPORTISTA AS DP
                            ON DP.CED_DEP = SP.CED_DEP
                            INNER JOIN SUBCATEGORIA AS SCAT
                            ON DP.ID_SCAT = SCAT.ID_SCAT
                            INNER JOIN CATEGORIA AS CAT
                            ON SCAT.ID_CAT = CAT.ID_CAT
                            INNER JOIN CAMBIO AS CAM
                            ON CAM.CED_DEP = DP.CED_DEP
                            INNER JOIN DETALLE_JUGADOR_VOCALIA AS DJV
                            ON CAM.ID_DETV = DJV.ID_DETV
                            WHERE SCAT.ID_SCAT=1;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listarEquipoSeniorPrimera()
    {
        $sql = "SELECT  C.NOM_CLUB AS NOM_CLUB,
                            DP.NOM_DEP AS NOM_DEP,
                            DJV.NTARJA_DETV AS AMA, DJV.NTARJR_DETV AS ROJ
                            FROM CLUB AS C
                            INNER JOIN SER_PARTE AS SP
                            ON C.ID_CLUB = SP.ID_CLUB
                            INNER JOIN DEPORTISTA AS DP
                            ON DP.CED_DEP = SP.CED_DEP
                            INNER JOIN SUBCATEGORIA AS SCAT
                            ON DP.ID_SCAT = SCAT.ID_SCAT
                            INNER JOIN CATEGORIA AS CAT
                            ON SCAT.ID_CAT = CAT.ID_CAT
                            INNER JOIN CAMBIO AS CAM
                            ON CAM.CED_DEP = DP.CED_DEP
                            INNER JOIN DETALLE_JUGADOR_VOCALIA AS DJV
                            ON CAM.ID_DETV = DJV.ID_DETV
                            WHERE SCAT.ID_SCAT=2;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listarEquipoSeniorSegunda()
    {
        $sql = "SELECT  C.NOM_CLUB AS NOM_CLUB,
                            DP.NOM_DEP AS NOM_DEP,
                            DJV.NTARJA_DETV AS AMA, DJV.NTARJR_DETV AS ROJ
                            FROM CLUB AS C
                            INNER JOIN SER_PARTE AS SP
                            ON C.ID_CLUB = SP.ID_CLUB
                            INNER JOIN DEPORTISTA AS DP
                            ON DP.CED_DEP = SP.CED_DEP
                            INNER JOIN SUBCATEGORIA AS SCAT
                            ON DP.ID_SCAT = SCAT.ID_SCAT
                            INNER JOIN CATEGORIA AS CAT
                            ON SCAT.ID_CAT = CAT.ID_CAT
                            INNER JOIN CAMBIO AS CAM
                            ON CAM.CED_DEP = DP.CED_DEP
                            INNER JOIN DETALLE_JUGADOR_VOCALIA AS DJV
                            ON CAM.ID_DETV = DJV.ID_DETV
                            WHERE SCAT.ID_SCAT=3;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listarEquipoInfantil()
    {
        $sql = "SELECT C.ID_CLUB AS ID_CLUB, C.NOM_CLUB AS NOM_CLUB,
                            REL.ID_CAT AS ID_CAT, CAT.NOM_CAT AS NOM_CAT,
                            SP.CED_DEP AS CED_DEP, DP.NOM_DEP AS NOM_DEP,
                            DJV.NTARJA_DETV AS AMA, DJV.NTARJR_DETV AS ROJ
                            FROM CLUB AS C
                            INNER JOIN SER_PARTE AS SP
                            ON C.ID_CLUB = SP.ID_CLUB
                            INNER JOIN DEPORTISTA AS DP
                            ON DP.CED_DEP = SP.CED_DEP
                            INNER JOIN RELATIONSHIP_25 AS REL
                            ON DP.CED_DEP = REL.CED_DEP
                            INNER JOIN CATEGORIA AS CAT
                            ON REL.ID_CAT = CAT.ID_CAT
                            INNER JOIN CAMBIO AS CAM
                            ON CAM.CED_DEP = DP.CED_DEP
                            INNER JOIN DETALLE_JUGADOR_VOCALIA AS DJV
                            ON CAM.ID_DETV = DJV.ID_DETV
                            WHERE CAT.ID_CAT=3;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listarEquipoFemenino()
    {
        $sql = "SELECT C.ID_CLUB AS ID_CLUB, C.NOM_CLUB AS NOM_CLUB,
                                REL.ID_CAT AS ID_CAT, CAT.NOM_CAT AS NOM_CAT,
                                SP.CED_DEP AS CED_DEP, DP.NOM_DEP AS NOM_DEP,
                                DJV.NTARJA_DETV AS AMA, DJV.NTARJR_DETV AS ROJ
                                FROM CLUB AS C
                                INNER JOIN SER_PARTE AS SP
                                ON C.ID_CLUB = SP.ID_CLUB
                                INNER JOIN DEPORTISTA AS DP
                                ON DP.CED_DEP = SP.CED_DEP
                                INNER JOIN RELATIONSHIP_25 AS REL
                                ON DP.CED_DEP = REL.CED_DEP
                                INNER JOIN CATEGORIA AS CAT
                                ON REL.ID_CAT = CAT.ID_CAT
                                INNER JOIN CAMBIO AS CAM
                                ON CAM.CED_DEP = DP.CED_DEP
                                INNER JOIN DETALLE_JUGADOR_VOCALIA AS DJV
                                ON CAM.ID_DETV = DJV.ID_DETV
                                WHERE CAT.ID_CAT=4;";
        $info = array();
        $sqlPreparada = $this->con->prepararSentencia($sql, $info);
        $lista = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}