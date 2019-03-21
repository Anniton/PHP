<?php
function auth($login, $passwd)
{
	$path = "../htdocs/private";
	$file = "/passwd";
	$pass = hash('whirlpool', $passwd);
	if (!$login || !$passwd)
		return FALSE;
	$tab = unserialize(file_get_contents($path.$file));
	if ($tab)
	{
		foreach ($tab as $data)
		{
			if ($data['login'] === $login && $data['passwd'] === $pass)
				return TRUE;
		}
	}
	else
		return FALSE;
}

?>
