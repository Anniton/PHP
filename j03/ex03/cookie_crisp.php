<?php
if (isset($_GET["action"]))
{
	if ($_GET["action"] == "set" && $_GET["name"] && $_GET["value"])  // CREER
		setcookie($_GET["name"], $_GET["value"], (time() + 3600));	
	if ($_GET["action"] == "get")
		echo $_COOKIE[$_GET["name"]] . PHP_EOL; // LIRE avec $_COOKIE qui receptionne le cookie miam
	if ($_GET["action"] == "del" && $_GET["name"] && !$_GET["value"]) // s'assurer qu'il n'y a plus de valeur avant de supprimer
	setcookie($_GET["name"], $_GET['value'], time() - 3600);
}
?>
