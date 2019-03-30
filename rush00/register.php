<?php
session_start();

if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
}

?>

<!--Doctype html-->
<html>
	<head>
		<meta charset="utf-8">
		<title>Site vitrine</title>
        <link href="index.css" rel="stylesheet" type="text/css" />

	</head>
</html>

<!---------------------------HEADER---------------------->
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
<div class="reg-log">
        <form action="login.php" method="POST">
            <input class="input" type="text" name="login" placeholder="Identifiant" class="" value="<?php echo isset($_GET['pseudo']) ? 'error' : '' ; ?>">
            <input class="input" type="password" name="password" placeholder="Mot de passe" class="<?php echo isset($_GET['password']) ? 'error' : '' ; ?>">
            <input class="input" type="password" name="password2" placeholder="Retaper son mot de passe" class="<?php echo isset($_GET['password']) ? 'error' : '' ; ?>">
            <input class="input"  type="email" name="email" placeholder="Mail" class="<?php echo isset($_GET['email']) ? 'error' : '' ; ?>">
            <input class="input"  type="text" name="firstname" placeholder="Prénom" class="<?php echo isset($_GET['firstname']) ? 'error' : '' ; ?>">
            <input class="input"  type="text" name="lastname" placeholder="Nom" class="<?php echo isset($_GET['lastname']) ? 'error' : '' ; ?>">
            <input class="input"  type="text" name="address" placeholder="Adresse" class="<?php echo isset($_GET['address']) ? 'error' : '' ; ?>">
            <button class="button" type="submit">Créer mon compte</button>
            <input class="input" type="hidden" name="from" value="login">
            <input class="input" type="hidden" name="success" value="index">
            <p class="notIs">Déjà inscrit ? <a class="linktext" href="login.php">Connecte-toi !</a></p>
        </form>
    </div>
</body>
