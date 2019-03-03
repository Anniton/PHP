#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
$fp = fopen("/var/run/utmpx", "r");
while ($utmp = fread($fp, 628))
{
	$unpack = unpack("a256user/a4size/a32line/ipid/istatus/I2time/a256host/i16pad", $utmp);
	$array[$unpack['line']] = $unpack;
}
	/*print_r($array); affiche l'ensemble des utilisateur*/
sort($array);
foreach ($array as $elem){
	if ($elem['status'] == 7)
 	{
//		echo str_pad(substr(trim($elem['user']), 0, 8), 8, " ")." ";
		echo $elem["user"] . "    ";
	//	echo str_pad(substr(trim($elem['line']), 0, 8), 8, " ")." ";
		echo $elem["line"] . "  ";
		echo (date("M", $elem["time1"])) . "  ";	
		echo "3" . " " . (date("H:i", $elem["time1"]));
	//	echo str_pad(date("j", $elem["time1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $elem["time2"]);
		echo "\n";
	}
}
fclose($fp);








/*
date_default_timezone_set('Europe/Paris');
$file = fopen("/var/run/utmpx", "r");
while ($utmpx = fread($file, 628))
{
	$unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
	$array[$unpack['c']] = $unpack;
}
ksort($array);
foreach ($array as $v){
	if ($v['e'] == 7) {
		echo str_pad(substr(trim($v['a']), 0, 8), 8, " ")." ";
		echo str_pad(substr(trim($v['c']), 0, 8), 8, " ")." ";
		echo date("M", $v["f1"]);
		echo str_pad(date("j", $v["f1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $v["f1"]);
		echo "\n";
	}
}*/
?>
