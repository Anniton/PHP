#!/usr/bin/php
<?php
if ($argc < 2)
	exit ;

date_default_timezone_set("Europe/paris");
$english = array (
	"jan" => "janvier",
	"feb" => "février",
	"mar" => "mars",
	"apr" => "avril",
	"may" => "mai",
	"jun" => "juin",
	"jul" => "juillet",
	"aug" => "août",
	"sep" => "septembre",
	"oct" => "octobre",
	"nov" => "novembre",
	"dec" => "décembre",
);

$jour = array (
	1 => "lundi",
	2 => "mardi",
	3 => "mercredi",
	4 => "jeudi",
	5 => "vendredi",
	6 => "samedi",
	7 => "dimanche",
);

$date = explode(" ", $argv[1]);
if (count($date) != 5)
{
	echo "Wrong Format\n";
	exit ;
}
$day = $date[0];
$nb = $date[1];
$month = $date[2];
$year = $date[3];
$time = $date[4];

if (preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $date[1], $date[1]) === 0 
	|| preg_match("/^[0-9]{4}$/", $date[3], $date[3]) === 0 
	|| preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4], $date[4]) === 0)
		{
			echo "Wrong Format\n";
			exit();
		}

if(!($ma = array_search(lcfirst($date[2]), $english)))
{
	echo "Wrong Format\n";
	exit();
}

$date[0] = array_search(lcfirst($date[0]),$jour);
if ($date[0] === false || $date[2] === false)
{
	echo "Wrong Format\n";
	exit();
}

	$res = new DateTime("$year-$ma-$nb $time");/*permet un decalage horaire de -1h*/	
	echo date_timestamp_get($res) . "\n";/*fonction qui set la date en seconde */
?>
