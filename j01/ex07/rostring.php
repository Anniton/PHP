#!/usr/bin/php
<?PHP
function ft_split_no($str)
{
	$tab = explode(" ", $str);
	return($tab);
}
if ($argv[1] === "")
	exit();
else{
	$word = trim($argv[1]);
	$tab = str_ireplace("  ", " ", $word);	
	while (strstr($tab, "  "))
		$tab = str_ireplace("  ", " ", $tab);
	$array = explode(" ", $tab);	
	$first = array_shift($array);
	foreach ($array as $elem)
	{
		echo "$elem ";
	}
	echo $first;
if ($argc > 1)
	echo PHP_EOL;
}
?>
