#!/usr/bin/php
<?php
if ($argc < 3)
	exit();
$needle = $argv[1];
unset($argv[0], $argv[1]);
$argv = array_reverse($argv);
foreach ($argv as $elem){
	$nb = explode(":", $elem);
	if ($needle === $nb[0]){
		echo $nb[1] . PHP_EOL;
		exit();
	}
}
?>
