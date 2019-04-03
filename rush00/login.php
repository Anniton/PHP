<?php
session_start();

if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}
	$pass = hash('whirlpool', $passwd);
 /*   if (!$login || !$passwd){
        header('Location: erreur.php');
        exit;
    }*/
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
			if ($data['login'] === $login && $data['passwd'] === $pass){
                $_SESSION['login'] = $login;
                var_dump($_SESSION);
                exit;
            }
		}
	}
	/*else
        header('Location: erreur.php');*/
?>

<!---------------------Doctype html-------------------------->
<html>
	<head>
		<meta charset="utf-8">
		<title>Site vitrine</title>
        <link href="index.css" rel="stylesheet" type="text/css" />

	</head>
</html>

<!-------------------------HEADER--------------------------->
<body>
<header>
<div class="main-all-navigation">
    <span class="span1"></span>
    <span class="span2"></span>
    <span class="span3"></span>
    <a class="home" href="index.php">HOME</a>
    <a class="create" href="register.php">NEW HERE</a>
    <a class="login" href="login.php">LOGIN</a>
    <p class="panier"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/basket_icon-icons.com_67985.png"/></p>
</header>

<!----------------------FORMULAIRE----------------------->
<div class="rect-log">
        <form action="login.php" method="POST">
            <input class="input" type="text" name="login" placeholder="Identifiant" class="" value="">
            <input class="input" type="password" name="passwd" placeholder="Mot de passe" class="">
            <button class="button" name="submit" type="submit">S'identifier</button>
            <input class="input" type="hidden" name="from" value="login">
            <input class="input" type="hidden" name="success" value="index">
            <p class="notIs">Pas encore inscrit ? <a class="linktext" href="register.php">Inscris-toi !</a></p>
        </form>
    </div>
</body>