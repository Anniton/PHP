#!/usr/bin/php
<?php
if ($argc != 2){
	echo "Incorrect Parameters\n";
	exit();
}
$get = str_replace(" ", "", $argv[1]);
$nb1 = intval($get);
$length1 = strlen($nb1);
$op = substr(substr($get, strlen($nb1)), 0, 1);
$nb2 = substr(substr($get, strlen($nb1)), 1);
if (is_numeric($nb1) && is_numeric($nb2)) {
	if ($op == "+")
	{
		$res = $nb1 + $nb2;
		echo "$res\n";
	}
	else if ($op == "-")
	{
		$res = $nb1 - $nb2;
		echo "$res\n";
	}
	else if ($op == "*")
	{
		$res = $nb1 * $nb2;
		echo "$res\n";
	}
	else if ($op == "/")
	{
		$res = $nb1 / $nb2;
		echo "$res\n";
	}
	else if ($op == "%")
	{
		$res = $nb1 % $nb2;
		echo "$res\n";
	}	
}
else{
	echo "Syntax Error\n";
	exit ;
}
?>
