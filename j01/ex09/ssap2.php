#!/usr/bin/php
<?php
function tab_sort($one, $two)
{
	$one = strtolower($one);
	$two = strtolower($two);
	foreach(range('a','z') as $i) {
		$alphatab[] = $i;
	}
	$alphatab[] = '0';	
	$alphatab[] = '1';
	$alphatab[] = '2';	
	$alphatab[] = '3';
	$alphatab[] = '4';	
	$alphatab[] = '5';
	$alphatab[] = '6';	
	$alphatab[] = '7';
	$alphatab[] = '8';	
	$alphatab[] = '9';
	if (strlen($one) < strlen($two))
		$length = strlen($one);
	else
		$length = strlen($two);
	$i = 0;
	while ($i < $length)
	{
		$letterone = substr($one, $i, 1);
		$lettertwo = substr($two, $i, 1);
		$keyone = array_search($letterone, $alphatab);
		$keytwo = array_search($lettertwo, $alphatab);
		if ($keyone === false)	
			$keyone = ord($letterone) + 100;
		else
			$keyone = $keyone;

		if ($keytwo === false)
			$keytwo = ord($lettertwo) + 100;
		else
			$keytwo = $keytwo;
		if ($keytwo < $keyone){
			return false;}
		if ($keytwo > $keyone)
			return true;
		$i++;
	}
	return strlen($one) <= strlen($two) ? true : false;
}
/*************Gerer les zeros***************/
function myFilter($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}
$tab = array();
unset($argv[0]);
/*************Isoler dans un tableau********/
foreach($argv as $elem)
{
	$tmp = array_filter(explode(" ", $elem), 'myFilter');
	foreach ($tmp as $value)
		$tab[] = $value;
}
/*******************swap*********************/
$i = 0;
while($i < count($tab) - 1)
{
	if (tab_sort($tab[$i], $tab[$i + 1])) {
		$i++;
	} else {
		$tmp = $tab[$i];
		$tab[$i] = $tab[$i + 1];
		$tab[$i + 1] = $tmp;
		$i = 0;
	}
}
foreach ($tab as $elem)
	echo $elem . PHP_EOL;
?>
