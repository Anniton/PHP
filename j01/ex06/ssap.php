#!/usr/bin/php
<?php
function myFilter($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}
function ft_split($string)
{
	$my_tab=explode(" ", $string); 
	if (isset($my_tab) === true)
	{
		$res = array_filter($my_tab, 'myFilter');
		$word = array_values(($res));
	}
	sort($word);
	return($word);
}
if ($argc > 1)
{
	if ($argv[1] === "")
		exit();
	else{
		$i = 1;
		while ($i < $argc)
			$string .= " ".$argv[$i++]." "; /*concatenation des arguments*/
		$strtrim = trim($string);
		$array = ft_split($strtrim);
		$size = sizeof($array);
		foreach ($array as $key => $elem)
		{	
			echo $elem;
			if ($key < $size - 1)
				echo PHP_EOL;
		}
	}
}
else
	exit();
?>

