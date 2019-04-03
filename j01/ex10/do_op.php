#!/usr/bin/php
<?php
 
if ($argc == 4)
{	
	$nb1 = trim($argv[1]);
	$op = trim($argv[2]);
	$nb2 = trim($argv[3]);

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
if ($argc != 4){
	echo "Incorrect Parameters\n";
	exit();
}
?>
