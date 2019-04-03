#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	if ($argv[1] === "")
		exit();
	else {
		$i = 0;
		while($i < $argc)
		{
			$str = trim(preg_replace("/[\t\r\s\s]+/", " ", $argv[1]));
			$word = explode(" ", $str);
			$i++;
		}
		$i = 1;
		while($i < count($word)){
			echo ($word[$i]." ");
			$i++;
		}
		echo $word[0]. PHP_EOL;
	}
}
?>
