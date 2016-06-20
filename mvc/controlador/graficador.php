<?php
class graficador{
	public $titulo;
	public $head;
	public $contenido;
	public $descripcion;
	public $palabrasClaves;
	public function agregarCSS($href){
		$this->head.="<link href='$href' rel='stylesheet'>";
	}
	public function agregarFavicon($href){
		$this->head.="<link href='$href' rel='icon' type='image/png'>";
	}
	public function agregarScript($src){
		$this->head.="<script src='$src'></scrip>";
	}
}