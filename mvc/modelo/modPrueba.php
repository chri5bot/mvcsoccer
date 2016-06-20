<?php
class modPrueba{
	private $con;
	public function __construct($conexion){
		$this->con=&$conexion;
	}
	public function listarPrueba(){
		$sql = "select * from prueba;";
		$info = array();
		$sqlPreparada = $this->con->prepararSentencia($sql, $info);
		$lista=$sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
		return $lista;
	}
	
	public function agregarPrueba($contendio){
		$hoy=date("Y-m-d H:i:s");
		$sql="insert into prueba(pru_contenido, pru_fecha) values (?, ?)";
		$info=array($contenido, $hoy);
		$this->con->prepararSentencia($sql, $info);
	}
}