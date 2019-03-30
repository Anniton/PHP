#!/usr/bin/php
<?php
function is_sort($one, $two)
{
	$one = strtolower($one);
	$two = strtolower($two);
	$alphatab = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	if (strlen($one) < strlen($two))
		$length = strlen($one);
	else
		$length = strlen($two);
	//	$length = strlen($one) < strlen($two) ? strlen($one) : strlen($two);
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
//	echo "LETTERONE" . var_dump($letterone); 
//	echo "LETTERTWO" . var_dump($lettertwo);
//			echo "KEYTWO" . var_dump($keytwo) . PHP_EOL;
//			echo "KEYONE" . var_dump($keyone) . PHP_EOL;	
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
if ($argc < 3)
	exit();
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
	if (is_sort($tab[$i], $tab[$i + 1])) {
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
