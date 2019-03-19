#!/usr/bin/php
<?php
if ($argc != 2)
	exit();
if ($argc == 2)
{	$word = preg_replace('/\s\s+/', ' ', $argv[1]);
	$string = trim($word);
	echo "$string\n";
}
?>
