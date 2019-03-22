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

if ($argc != 1)
{
	$i = 1;
	while ($i < $argc)
		$string .= " ".$argv[$i++]." "; 
	$strtrim = trim($string);
	$my_tab = ft_split($strtrim);

	foreach ($my_tab as $alpha)
	{
		if (ctype_alpha($alpha))
		{
			$alphabetic[] = $alpha;
			natcasesort($alphabetic);
		}
	}
	if ($alphabetic)
		foreach ($alphabetic as $v)
			echo $v.PHP_EOL;
	else
		echo "";

	foreach ($my_tab as $nb)
	{
		if (is_numeric($nb))
		{
			$numeric[] = $nb;
			sort($numeric, SORT_STRING);
		}
	}
	if ($numeric)
		foreach ($numeric as $v)
			echo $v.PHP_EOL;
	else
		echo "";

	foreach ($my_tab as $oth)
	{
		if ((ctype_alpha($oth) == false) && (is_numeric($oth) == false))
		{
			$other[] = $oth;
			natcasesort($other);
		}
	}
	if ($other)
		foreach ($other as $v)
			echo $v.PHP_EOL;
	else
		echo "";
}
?>
