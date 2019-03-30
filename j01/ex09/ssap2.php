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
}/*
function epur_str($str)
{
	$str = trim($str);
	$tmp = $str;
	$str = str_replace("  ", " ", $str);
	while (strcmp($str, $tmp) != 0)
	{
		$tmp = $str;
		$str = str_replace("  ", " ", $str);
	}
	return (explode(" ", $str));
}
function append(&$tab, $str)
{
	$len = count($tab);
	$tab[$len] = $str;
}
function is_alpha($str)
{
	$alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$i = 0;
	$len = strlen($str);
	while ($i < $len)
	{
		if (strpos($alphabet, $str[$i]) == False)
			return (False);
		$i++;
	}
	return (True);
}
function sort_array(&$tab)
{
	$index = count($tab);
	$i = 0;
	while ($i < ($index - 1))
	{
		$j = $i + 1;
		while ($j < $index)
		{
			if (strcasecmp($tab[$j], $tab[$i]) < 0)
			{
				$tmp = $tab[$i];
				$tab[$i] = $tab[$j];
				$tab[$j] = $tmp;
			}
			$j++;
		}
		$i++;
	}
}
function print_arrays($alph, $num, $others)
{
	sort_array($alph);
	foreach ($alph as $a)
		echo "$a\n";
	sort_array($num);
	foreach ($num as $n)
		echo "$n\n";
	sort_array($others);
	foreach ($others as $o)
		echo "$o\n";
}
function fill_arr(&$alph, &$num, &$others, $str)
{
	if (is_numeric($str))
		append($num, $str);
	else if (is_alpha($str))
		append($alph, $str);
	else
		append($others, $str);
}
if ($argc > 1)
{
	$alph = array();
	$num = array();
	$others = array();
	$i = 1;
	while ($i < $argc)
	{
		if (strpos($argv[$i], " "))
		{
			$tab = epur_str($argv[$i]);
			foreach ($tab as $t)
				fill_arr($alph, $num, $others, $t);
		}
		else
			fill_arr($alph, $num, $others, $argv[$i]);
		$i++;
	}
	print_arrays($alph, $num, $others);
}*/
?>
