#!/usr/bin/php
<?php


	$url = $argv[1];
	if(!($html = file_get_contents($url)))
		exit ;
	echo $html;

	$ch = curl_init($html);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, '1');
	curl_setopt($process, CURLOPT_TIMEOUT, 30);         
	curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);         
	curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
	$ret = curl_exec($ch);
	curl_close($ch);
	return $ret;


	preg_match_all("/<img[^>]+src=([^\s>]+)/i", $html, $matches);
	matches[1] = preg_match_all(
?>

