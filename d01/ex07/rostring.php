#!/usr/bin/php
<?PHP


function ft_split_no($str)
{
	$tab = explode(" ", $str);
	return($tab);
}

	$word = trim($argv[1]);
	$tab = str_ireplace("  ", " ", $word);
	
	
	while (strstr($tab, "  "))
	{
		$tab = str_ireplace("  ", " ", $tab);
	}
	$array = explode(" ", $tab);	
	$first = array_shift($array);
	foreach ($array as $elem)
	{
		echo "$elem ";
	}
	echo "$first\n";


/*
function ft_split_no($s1)
{
	$tab = explode(" ", $s1);
	return($tab);
}


$eleme = trim($argv[1]);
$tab = str_ireplace("  ", " ", $eleme);


while (strstr($tab, "  "))
{
	$tab = str_ireplace("  ", " ", $tab);
}
$my_tab = explode(" ", $tab);
$first = array_shift($my_tab);
foreach($my_tab as $el)
{
	echo $el;
	echo " ";
}
echo $first;
if ($argc > 1)
	echo "\n";*/
?>
