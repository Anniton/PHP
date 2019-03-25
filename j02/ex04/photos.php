#!/usr/bin/php
<?php
/***************recuperer la page HTML****************/
function getHtml($url){
$ch = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$html = curl_exec($curl);
curl_close($curl);
return ($html);
}
/*************Isoler les images du site par l'intitule***************/
function isolateImg($link,$url) {
preg_match("/<img[^>]+src=([^\s>]+)/i", $link, $matches);
foreach ($matches as $elem => $value) {
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	$v = preg_replace("/<img src=/", '', $link);
	$v = stripslashes(substr($v, 1, -1));
	if (preg_match($reg_exUrl, $link))
		return $v;
	else
		return $url . $v; }
}
/***************Creer le dossier**********************/
function createR($filename) {
	$filename = preg_replace("/^.*?:\/\//","", $filename);
	if (file_exists($filename) && is_dir($filename))
		return($filename);
	mkdir($filename);
	return($filename);
}
/*****************Recuperer les images****************/
function dwnldImg($img, $filename) {
	$ch = curl_init($img);///On initialise cURL
	curl_setopt($ch, CURLOPT_URL, 0);///On lui transmet la variable qui contient l'URL
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);///On lui demdande de nous retourner la page
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);///On envoie un user-agent pour ne pas être considéré comme un bot malicieux
	$res = curl_exec($ch);///On exécute notre requête et met le résultat dans une variable
	curl_close($ch);///On ferme la connexion cURL
	$fp = fopen($filename, 'w');
	fwrite($fp, $fp=$filename);
	fclose($fp);
}
/*************************DO***************************/
if ($argc < 2 || !file_exists($argv[1]))	
	exit() ;
else {
	$html = getHtml($argv[1]);
	if (!empty($html)){
		$images = isolateImg($html, argv[1]);
		$folder = createR($argv[1]);
		dwnldImg($images, $filename);
	}
}
?>
