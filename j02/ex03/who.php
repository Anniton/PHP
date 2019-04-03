#!/usr/bin/php
<?php
/*https://intranet.royalholloway.ac.uk/isg/documents/pdf/technicalreports/2015/rhul-isg-2015-8.pdf*/
date_default_timezone_set("Europe/Paris");
$fp = fopen("/var/run/utmpx", "r");
while ($utmp = fread($fp, 628)){
	$unpack = unpack("a256user/a4size/a32line/ipid/istatus/I2time/a256host/i16pad", $utmp);
	$array[$unpack['line']] = $unpack;
}
sort($array);
foreach ($array as $elem){
	if ($elem['status'] == 7)
 	{
		echo $elem["user"] . "    ";
		echo $elem["line"] . "  ";
		echo (date("M", $elem["time1"])) . "  ";	
		echo (date("j", $elem["time1"]))." ".(date("H:i", $elem["time1"]));	
		echo "\n";
	}
}
fclose($fp);
?>
