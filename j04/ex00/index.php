<?php

//Demarrer la session AVANT d'ecrire du code HTML
session_start();
if ($_GET['passwd'] && $_GET['login'] && $_GET['submit'] == OK)
{
	$_SESSION['prenom'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}	
?>

<html><body>
<form method="GET" action="index.php">
Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
	<br />
	Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['login']; ?>" />
 <input type="submit" name="submit" value="OK"/>
</form>
</body></html>

