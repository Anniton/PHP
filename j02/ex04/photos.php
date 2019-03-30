#!/usr/bin/php
<?php
function getImg($link,$url) {
	$regex = "/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	$v = preg_replace("/<img src=/", '', $link);
	$v = stripslashes(substr($v, 1, -1));
	if (preg_match($regex, $link))
		return $v;
	else
		return $url . $v; }
/**********************Creer le dossier avec le nom***********************/
function createR($filename) {
	$filename = preg_replace("/^.*\/\//","", $filename);
	if (file_exists($filename) && is_dir($filename))
		return($filename);
	else{
		mkdir($filename);
		/*echo "FILES CREATE\n";*/
		return($filename);}
}
/***************************Retenir le nom du fichier**********************/
function getFileName($file) {
	$name_arr = explode('/', $file);
	$name = $name_arr[(count($name_arr) - 1)];
	$name = stripslashes(substr($name, 0, -1));
	return $name;
}
/****************************Recuperer les images***************************/
function dwnldImg($img, $filename) {
	$ch = curl_init($img);///On initialise cURL
	curl_setopt($ch, CURLOPT_HEADER, 0);///On lui transmet la variable qui contient l'URL
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);///On lui demdande de nous retourner la page
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
	$res = curl_exec($ch);///On exécute notre requête et met le résultat dans une variable
	curl_close($ch);///On ferme la connexion cURL
	$fp = fopen($filename, 'x');
	fwrite($fp, $res);
	fclose($fp);
}
/************************************DO*************************************/
if ($argc < 2 || !$argv[1])	
	exit();
$html = file_get_contents($argv[1]);
$folder = createR($argv[1]);
preg_match_all("/<img[^>]+src=([^\s>]+)/", $html, $matches);
foreach ($matches[1] as $v) {
	$save_path = $folder . "/" . getFileName($v);
	$url_path = getImg($v, $argv[1]);
	dwnldImg($url_path, $save_path);
}
?>
