#!/usr/bin/php
<?php
function ft_split($string)
{
	$my_tab=explode(" ", $string);	
	$word = array_values(array_filter($my_tab));
	sort($word);
	return($word);
}

if ($argc > 1)
{
	$i = 1;
	while ($i < $argc)
		$string .= " ".$argv[$i++]." "; /*concatenation des arguments*/
	$strtrim = trim($string);
	$array = ft_split($strtrim);
	foreach ($array as $elem)
		echo "$elem\n";
}
?>
