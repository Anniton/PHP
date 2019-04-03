<?php
session_start();
$path = "../htdocs/private";
$file = "/passwd";
if ($_POST['passwd'] && $_POST['login'] && $_POST['submit']  && $_POST['submit'] === "OK")
{
	if (!file_exists($path))
	{
		mkdir("../htdocs");
		mkdir($path);
	}
	if (!file_exists($path.$file))
		file_put_contents($path.$file, null); //recupere un fichier dans une chaine de caractere
	$tab = unserialize(file_get_contents($path.$file)); //cree une variable PHP depuis une chaine linearisee
	if ($tab)
	{
		$exist = 0;
		foreach ($tab as $title => $value)
		{
			if($value['login'] === $_POST['login'])
				$exist = 1;
		}
	}
	if ($exist)
	{
		echo "ERROR\n";
	}
	else
	{
		$_POST['passwd'] = hash('whirlpool', $_POST['passwd']);
		$tab[] = $pass = array('login'=>$_POST['login'], 'passwd'=>$_POST['passwd']);
		file_put_contents($path.$file, serialize($tab));
		echo "OK\n";
	}
}
else
{
	echo "ERROR\n";
	exit();
}
?>
