<?php
class conexion{
	protected $infoBD="mysql:host=localhost; dbname=ejemplo";
	protected $usuarioBD="root";
	protected $claveBD="";
	protected $DB;
	
	public function __construct(){
		$this->DB=new PDO($this->infoBD, $this->usuarioBD, $this->claveBD);
		$this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	public function prepararSentencia($sql, $info){
		$sqlPreparada = $this->DB->prepare($sql);
		try{
			$sqlPreparada->execute($info);			
		} catch (Exception $ex){
			return $ex;
		}
		return $sqlPreparada;
	}
	
	public function ultimoId(){
		return $this->DB->lastInsertId();
	}
}