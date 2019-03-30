<?php

Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;	
	static $verbose = false;
	public function __construct(array $kwargs) {
		//	print('Constructor called' . PHP_EOL);
		if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) &&  array_key_exists('blue', $kwargs))
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
		}
		else if  (array_key_exists('rgb', $kwargs))

		{
		//	$this->rgb = $kwargs['rgb'] >> 24;
			$this->red = $kwargs['rgb'] >> 16;
			$this->green = $kwargs['rgb'] >> 8;
			$this->blue = $kwargs['rgb'] >> 24;
		}
		else
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
	
		}
		if (self::$verbose == true) {
			//	var_dump($this->red);
			print($this . ' constructed.' . PHP_EOL);
		} 
		return ;
	}





	public function add(Color $second)
	{
		return (new Color( array( 'red' => $this->red + $second->red, 'green' => $this->green + $second->green, 'blue' => $this->blue + $second->blue)));
	}
	public function sub(Color $second)
	{
		return (new Color( array( 'red' => $this->red - $second->red, 'green' => $this->green - $second->green, 'blue' => $this->blue - $second->blue)));
	}
	public function mult($var)
	{	
		return (new Color( array( 'red' => $this->red * $var, 'green' => $this->green * $var, 'blue' => $this->blue * $var)));
	}

	public function __toString() {
		return ('Color( red:' . $this->red . ', green:' . $this->green . ', blue:' . $this->blue . ')');
	}

	public function __destruct() {
		if (self::$verbose == true)
			print($this . ' destructed.' . PHP_EOL);
		return ; 
	}

}
?>

