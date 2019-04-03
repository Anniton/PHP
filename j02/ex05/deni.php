#!/usr/bin/php
<?php
if ($argc != 3 || !file_exists($argv[1]))
	exit();
$file = $argv[1];
$fd = fopen($file, "r");

while ($fd && !feof($fd)) {
	$tab[] = explode(";", fgets($fd)); 
}
$title = $tab[0]; #dans title on a nom prenom mail ID pseudo#
foreach ($title as $elem => $value)
	$title[$elem] = trim($value);
$idx = array_search($argv[2], $title); #on cherche dans le tab  title si on a argv2#
if (!$idx)
	exit();
foreach ($title as $elem => $value){
	$tmp = array();
	foreach ($tab as $e) {
		if(isset($e[$idx]))
			$tmp[trim($e[$idx])] = trim($e[$elem]);}
	$$value = $tmp;
}
$cmd = fopen("php://stdin", "r");
while (1) {
	echo "Entrez votre commande: ";
	$do = fgets($cmd);
	eval($do);
}
fclose($fd);
fclose($cmd);
?>
