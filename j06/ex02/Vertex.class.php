<?php

require_once'Color.class.php';

Class Vertex {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.00;
	private $_color;
	static $verbose = false;

	public function doc(){
		$fd = fopen("Vertex.doc.txt","r");
		while ($fd && !feof($fd))
			echo fgets($fd);
		fclose($fd);
	}

	public function __construct(array $vtx) {
		$this->_x = $vtx['x'];
		$this->_y = $vtx['y'];
		$this->_z = $vtx['z'];
		if (isset($vtx['w']) && !empty($vtx['w']))
			$this->_w = $vtx['w'];
		if (isset($vtx['color']) && !empty($vtx['color']) && $vtx['color'] instanceof Color)
			$this->_color = $vtx['color'];
		else
			$this->_color = new Color( array('red' => 255, 'green' => 255, 'blue' => 255));		

			if (self::$verbose == true){
				print($this . ' constructed' . PHP_EOL);
			}
		return ;
	}
	public function __toString() {
		if (self::$verbose == true)
			return ('Vertex( x: ' . number_format($this->_x,2) . ', y: ' . number_format($this->_y,2) . ', z:' . number_format($this->_z,2) . ', w:' . number_format($this->_w,2) . ', Color( red: ' . $this->_color->red . ', green: ' . $this->_color->green . ', blue: ' . $this->_color->blue . ') )');
		return ('Vertex( x: ' . number_format($this->_x,2) . ', y: ' . number_format($this->_y,2) . ', z:' . number_format($this->_z,2) . ', w:' . number_format($this->_w,2) . ')');
	}

	public function __destruct() {
		if (self::$verbose == true)
			print($this . ' destructed' . PHP_EOL);
		return ;

	}
	public function getX(){
		return $this->_x;}
	public function setX($x){
		$this->_x = $x;}
	public function getY(){
		return $this->_y;}
	public function setY($y){
		$this->_y = $y;}
	public function getZ(){
		return $this->_z;}
	public function setZ($z){
		$this->_z = $z;}
	public function getW(){
		return $this->_w;}
	public function setW($w){
		$this->_w = $w;}
	public function getColor(){
		return $this->_color;}
	public function setColor($color){
		$this->_color = $color;}
}


