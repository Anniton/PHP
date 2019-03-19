#!/usr/bin/php
<?php
if ($argc > 2)
{
	$i = 2;
	foreach ($argv as $elem)
		if ($elem == argv[0] || $elem == argv[1])
			echo "";
		else
		{
			$nb = explode(':', $elem);
			if ($nb[0] == $argv[1])
				$res = $nb[1];
		}
	if ($nb[0] != $argv[1])
		echo "";
	else
		echo "$res\n";
}
