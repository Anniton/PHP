<?php
if (isset($_GET["action"]))
{
	if ($_GET["action"] == "set" && $_GET["name"] && $_GET["value"])  // CREER
	{
		setcookie($_GET["name"], $_GET["value"], (time() + 3600));	
		echo "Cookie is created\n";
	}
	elseif ($_GET["action"] == "get" && $_GET["name"] && $_GET["value"])
		echo "Val. du cookie : ".$_COOKIE[$_GET["name"]]."\n"; // LIRE avec $_COOKIE qui receptionne le cookie miam
	elseif ($_GET["action"] == "del" && $_GET["name"] && !$_GET["value"]) // s'assurer qu'il n'y a plus de valeur avant de supprimer
	{	
		setcookie($_GET["name"], "", time() - 3600);
		echo "Cookie is deleted\n";
	}
}
?>
