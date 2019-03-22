#!/usr/bin/php
<?php
function myFilter($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}
function ft_split($string)
{
	$my_tab=explode(" ", $string); //transforme une chaine de char en tableau
	if (isset($my_tab) === true)
	{
		$res = array_filter($my_tab, 'myFilter');
		$word = array_values(($res));
	}
	sort($word);
	return($word);
}
?>
