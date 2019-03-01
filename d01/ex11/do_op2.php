#!/usr/bin/php
<?php

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
		exit;
}
if ($argc == 2)
{	
	//si + existe
	if (strpos($argv[1], "+") !== FALSE)	
		$nb = explode('+', $argv[1]);
	else if (strpos($argv[1], "-") !== FALSE)	
		$nb = explode('-', $argv[1]);
	else if (strpos($argv[1], "/") !== FALSE)	
		$nb = explode('/', $argv[1]);
	else if (strpos($argv[1], "*") !== FALSE)	
		$nb = explode('*', $argv[1]);
	else if (strpos($argv[1], "%") !== FALSE)	
		$nb = explode('%', $argv[1]);
	else
	{	
		echo "Syntax Error\n";
		exit ;
	}
	if (count($nb) != 2)
	{
		echo "Syntax Error\n";
		exit ;
	}
	else
	{
		foreach ($nb as $value)
		{
			$val[] = trim($value);
		}
		if (ctype_digit($val[0]) == 1 && ctype_digit($val[1]) == 1)
		{
			if (strpos($argv[1], "+") !== FALSE)	
				echo ($val[0] + $val[1]);
			if (strpos($argv[1], "-") !== FALSE)	
				echo ($val[0] - $val[1]);
			if (strpos($argv[1], "/") !== FALSE)	
				echo ($val[0] / $val[1]);
			if (strpos($argv[1], "*") !== FALSE)	
				echo ($val[0] * $val[1]);
			if (strpos($argv[1], "%") !== FALSE)	
				echo ($val[0] % $val[1]);
			echo "\n";
		}
		else
		{
			echo "Syntax Error\n";
			exit ;
		}
	}
}
?>
