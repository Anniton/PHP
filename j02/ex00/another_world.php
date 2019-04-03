#!/usr/bin/php
<?php
if ($argc > 1)
{
	if ($argv[1] === "")
		exit();
	else{	
		$space_separated = trim(preg_replace("/[\t\r\s]+/"," ", "$argv[1]"));
		echo "$space_separated\n";
	}
}
else
	exit();
?>
