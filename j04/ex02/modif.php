<?php
$path = "../htdocs/private";
$file = "/passwd";
if ($_POST['newpw'] && $_POST['login'] && $_POST['oldpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	$tab = unserialize(file_get_contents($path.$file));
	if ($tab)
	{
		$exist = 0;
		foreach ($tab as $title => $value)
		{
			if($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$exist = 1;
				$tab[$title]['passwd'] = hash('whirlpool', $_POST['newpw']); //on l'encrypte a nouveau;
			}
		}
		if ($exist)
		{
			file_put_contents($path.$file, serialize($tab));
			echo "OK\n";
		}
		else
		{
			echo "ERROR\n";
		//	exit();
		}
	}
	else
	{
		echo "ERROR\n";
	//	exit();
	}
}
else
{
	echo "ERROR\n";
	exit();
}
?>
