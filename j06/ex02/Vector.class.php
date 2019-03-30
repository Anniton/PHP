<?php

require_once 'Vertex.class.php';

Class Vector {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0;
	public $dest;
	static $verbose = false;

	public function doc(){
		$fd = fopen("Vector.doc.txt","r");
		while ($fd && !feof($fd))
			echo fgets($fd);
		fclose($fd);
	}
		public function __construct(array $tab){
			public $orig = new Vertex(array('x' => $tab['orig'], 'y' => $tab['orig'], 'z' => $tab['orig']));
				if(array_key_exists('y', $this->orig) && array_key_exists('x', $this->orig) &&  array_key_exists('z', $this->orig)){
					$this->_x = $tab['dest'] - $orig->getX();
					$this->_y = $tab['dest'] - $orig->getY();
					$this->_z = $tab['dest'] - $orig->getZ();

				}
			if (self::$verbose == true){
				print($this . ' constructed' . PHP_EOL);
		}
		}
			public function magnitude(){
			}

			public function normalize(){
			}

			public function add($rhs){
				return new Vector( array('dest' => new Vertex(array('x' => $
				$this->_y + $this->_y;
			}

			public function sub($rhs){
			}


			public function opposite(){
			}

			public function product(){
			}

			public function product(){
			}

			public function cos($rhs){
			}

			public function crossProduct($rhs){
			}

			public function __toString(){
				if (self::verbose == true)
					return return ('Vertex( x: ' . number_format($this->_x,2) . ', y: ' . number_format($this->_y,2) . ', z:' . number_format($this->_z,2) . ', w:' . number_format($this->_w,2) . ')'; 
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
	
	public function __destruct() {
		if (self::verbose == true)
			print($this . ' destructed' . PHP_EOL);
		return ;
	}

}














































?>
