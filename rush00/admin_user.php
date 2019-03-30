<?php
session_start();

if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
    include('header.php');
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

<table class="reg_log">
    <tr>
        <td>IDENTIFIANT</td>
        <td>NOM</td>
        <td>PRENOM</td>
        <td>MAIL</td>
        <td>ADRESSE</td>
        <td>RETIRER</td>
        <td>AJOUTER</td>
    </tr>
    <tr>
        <td><input class="input" type="text" name="pseudo" placeholder="Identifiant" class=""></td>
        <td><input class="input"  type="text" name="lastname" placeholder="Nom"></td>
        <td><input class="input"  type="text" name="firstname" placeholder="Prénom"></td>
        <td><input class="input"  type="email" name="email" placeholder="Mail"></td>
        <td><input class="input"  type="text" name="address" placeholder="Adresse"></td>
        <td></td>
        <td> <a class="add" href="admin_user.php">✓</a></td>
    </tr>
</table>











<!--------------------------FOOOTER----------------------->
<div class="footer">
  <p>Designed by callard & aquan ©</p>
</div>