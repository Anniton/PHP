#!/usr/bin/php
<?php
if ($argc != 2)
	exit();
if ($argc == 2)
{	
	if ($argv[1] === '')
		exit();
	else{
		$word = preg_replace('/[\t\r\s]+/', ' ', $argv[1]);
		$string = trim($word);
		echo "$string\n";
	}
}
?>
