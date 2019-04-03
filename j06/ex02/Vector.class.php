<?php
require_once 'Color.class.php';
require_once 'Vertex.class.php';

Class Vector {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0;
	static $verbose = false;

	public static function doc(){
		$fd = fopen("Vector.doc.txt","r");
		while ($fd && !feof($fd))
			echo fgets($fd);
		fclose($fd);
	}

	public function __construct(array $tab){
		if (isset($tab['dest']) && $tab['dest'] instanceof Vertex) {
				if (isset($tab['orig']) && $tab['orig'] instanceof Vertex) {
					$orig = new Vertex(array('x' => $tab['orig']->getX(), 'y' => $tab['orig']->getY(), 'z' => $tab['orig']->getZ()));
				}
				else {
					$orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
				}
				$this->_x = $tab['dest']->getX() - $orig->getX();
				$this->_y = $tab['dest']->getY() - $orig->getY();
				$this->_z = $tab['dest']->getZ() - $orig->getZ();
				$this->_w = 0;
		}
			if (self::$verbose == true){
				print($this . ' constructed' . PHP_EOL);
			}
	}

	public function magnitude(){
		return (float)(sqrt(pow(($this->_x),2) + pow(($this->_y),2) + pow(($this->_z),2)));
	}

	public function normalize(){
		$longeur = $this->magnitude();
		if ($longeur == 1) {
			return clone $this;
		}
		return new Vector(array('dest' => new Vertex(array(
			'x' => $this->_x / $longeur, 
			'y' => $this->_y / $longeur, 
			'z' => $this->_z / $longeur))));
	}

	public function add($rhs){
		return new Vector(array('dest' => new Vertex(array(
			'x' => $this->_x + $rhs->_x, 
			'y' => $this->_y + $rhs->_y, 
			'z' => $this->_z + $rhs->_z))));
	}

	public function sub($rhs){
		return new Vector(array('dest' => new Vertex(array(
			'x' => $this->_x - $rhs->_x, 
			'y' => $this->_y - $rhs->_y, 
			'z' => $this->_z - $rhs->_z))));
	}

	public function opposite(){
		return new Vector(array('dest' => new Vertex(array(
			'x' => $this->_x * (-1), 
			'y' => $this->_y * (-1), 
			'z' => $this->_z * (-1)))));
	}

	public function scalarProduct($k){
		return new Vector(array('dest' => new Vertex(array(
			'x' => $this->_x * $k, 
			'y' => $this->_y * $k, 
			'z' => $this->_z * $k))));
	}

	public function dotProduct($rhs){
		return (float)(($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z));
	}

	public function cos($rhs){
		return ((($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z)) 
		/ sqrt((($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z))
		 * (($rhs->_x * $rhs->_x) + ($rhs->_y * $rhs->_y) + ($rhs->_z * $rhs->_z))));
	}
	public function crossProduct($rhs){
		return new Vector(array('dest' => new Vertex(array(
			'x' => $this->_y * $rhs->getZ() - $this->_z * $rhs->getY(),
            'y' => $this->_z * $rhs->getX() - $this->_x * $rhs->getZ(),
            'z' => $this->_x * $rhs->getY() - $this->_y * $rhs->getX()
		))));
	}

	public function __toString(){
		if (self::$verbose == true)
			// return ('Vector( x:' . number_format($this->_x,2) . ', y:' . number_format($this->_y,2) .
			//  ', z:' . number_format($this->_z,2) . ', w:' . number_format($this->_w,2) . ' )'); 
			return (vsprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
		}

	public function __destruct() {
		if (self::$verbose == true)
			print($this . ' destructed.' . PHP_EOL);
		return ; 
	}
	public function getX(){
		return $this->_x;}
	public function getY(){
		return $this->_y;}
	public function getZ(){
		return $this->_z;}
	public function getW(){
		return $this->_w;}
}
?>
