#!/usr/bin/php
<?php
if ($argc > 1)
{

	foreach ($argv as $word)
		$keywords = preg_split("/\s+/", "$argv[1]");
	$space_separated = implode(" ", $keywords);
	echo "$space_separated\n";
}
?>
