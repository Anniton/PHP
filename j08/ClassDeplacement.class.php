<?php

Class Deplacement {
	private $_deplacement;
	static $verbose = false;
	const PORTEE_COURTE = 4;
	const PORTEE_MOYENNE = 5;
	const PORTEE_LONGUE = 6;

	public function __construct($porteeInitiale)
	{
		$this->setDeplacement($porteeInitiale);
	//	echo $this->_deplacement;
		if (self::$verbose == true) {
			echo $this->_deplacement . PHP_EOL;
		} 
	}
	public function setDeplacement($deplacement)
	{
		if (in_array($deplacement, [self::PORTEE_COURTE, self::PORTEE_MOYENNE, self::PORTEE_LONGUE]))
			$this->_deplacement = $deplacement;
	}
	public function __destruct() {
		if (self::$verbose == true)
		echo "Wrong\n";
			return ; 
	}

}

Deplacement::$verbose = True;
$deplacement = new Deplacement(Deplacement::PORTEE_MOYENNE);
Deplacement::$verbose = False;
?>
