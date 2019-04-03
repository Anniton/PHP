#!/usr/bin/php
<?php
function myFilter($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}
$array = array();
unset($argv[0]);
foreach($argv as $elem){
	$tmp = array_filter(explode(' ', $elem), 'myFilter');
	foreach ($tmp as $value)
		$array[] = $value;
}
sort($array);
foreach ($array as $elem)
	echo $elem . PHP_EOL;
?>
