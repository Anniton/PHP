<?php
Class Color {
	public $red;
	public $green;
	public $blue;	
	static $verbose = false;

	public static function doc(){
		$fd = fopen("Color.doc.txt","r");
		while ($fd && !feof($fd))
			echo fgets($fd);
		fclose($fd);
	}
	public function __construct(array $kwargs) {
		if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) && array_key_exists('blue', $kwargs))
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
		}
		else if  (array_key_exists('rgb', $kwargs))
		{
			$this->red = ($kwargs['rgb']) / 65281 % 256;
			$this->green = ($kwargs['rgb']) / 256 % 256;
			$this->blue = ($kwargs['rgb']) % 256;
		}
		else
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];

		}
		if (self::$verbose == true) {
			print($this . ' constructed.' . PHP_EOL);
		} 
		return ;
	}

	public function add(Color $second)
	{
		return (new Color(array( 'red' => $this->red + $second->red, 'green' => $this->green + $second->green, 'blue' => $this->blue + $second->blue)));
	}

	public function sub(Color $second)
	{
		return (new Color(array( 'red' => $this->red - $second->red, 'green' => $this->green - $second->green, 'blue' => $this->blue - $second->blue)));
	}

	public function mult($var)
	{	
		return (new Color(array( 'red' => $this->red * $var, 'green' => $this->green * $var, 'blue' => $this->blue * $var)));
	}

	public function __toString() {
		return ('Color( red: ' . round($this->red, 0). ', green: ' . round($this->green,0) . ', blue: ' . round($this->blue,0) . ')');
	}

	public function __destruct() {
		if (self::$verbose == true)
			print($this . ' destructed.' . PHP_EOL);
		return ; 
	}
}
?>

