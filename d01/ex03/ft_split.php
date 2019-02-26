#!/usr/bin/php
<?php

function ft_split($string)
{
	$my_tab=explode(" ", $string); //transforme une chaine de char en tableau
	$word = array_values(array_filter($my_tab));
	sort($word);
	return($word);
}
print_r(ft_split("    Hello  iiiiii     World AAA"));
?>
