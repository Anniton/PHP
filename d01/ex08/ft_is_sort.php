#!/usr/bin/php
<?php

$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
//$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");

function ft_is_sort($tab)
{		
	$res = sort($tab, SORT_NATURAL | SORT_FLAG_CASE | SORT_STRING);
	return ($res);
}
if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";




?>
