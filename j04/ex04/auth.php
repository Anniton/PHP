<?php
function auth($login, $passwd)
{
	$pass = hash('whirlpool', $passwd);
	if (!$login || !$passwd)
		return FALSE;

	if (!file_exists('../htdocs')) 
		mkdir("../htdocs");
	if (!file_exists('../htdocs/private')) 
		mkdir("../htdocs/private");
	if (!file_exists('../htdocs/private/passwd')) {
		file_put_contents('../htdocs/private/passwd', null);
	}

	$tab = unserialize(file_get_contents('../htdocs/private/passwd'));
	if ($tab)
	{
		foreach ($tab as $data)
		{
			if ($data['login'] === $login && $data['passwd'] === $pass)
				return true;
		}
	}
	else
		return false;
}

?>
