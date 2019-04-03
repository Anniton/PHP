<?php
session_start();
date_default_timezone_set('Europe/Paris');
if (!($_SESSION['loggued_on_user']))
	echo "ERROR\n";
else	
{
	if (file_exists('../htdocs') && file_exists('../htdocs/private') && file_exists('../htdocs/private/chat'))
	{
		$data = unserialize(file_get_contents('../htdocs/private/chat'));
		{
			foreach ($data as $value)
			{
				echo "[" . date("H:i", $value['time']) . "] <b>" . $value['login'] . "</b>: " . $value['msg'] . "<br />";
				echo PHP_EOL;
			}
		}
	}
}
?>
