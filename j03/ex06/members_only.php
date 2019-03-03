<?php
if (($_SERVER['PHP_AUTH_USER'] !== 'zaz' || $_SERVER['PHP_AUTH_USER'] !== 'jaimelespetitsponeys')) 
{
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo <html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n"
	exit;
}
else
{
	echo "<p>Bonjour, {$_SERVER['PHP_AUTH_USER']}.</p>";
	echo "<html><p>Votre mot de passe est {$_SERVER['PHP_AUTH_PW']}.</p></html>";
}
?>
