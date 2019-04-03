<?php
session_start();

include('header.php');
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
require_once('users.php');
if ($_POST['add'] === "OK")
    adduser($_POST['login'], $_POST['passwd'], $_POST['fname'], $_POST['lname'], $_POST['mail'], 0);
if ($_POST['mod'] === "OK")
    moduser($_POST['login'], $_POST['passwd'], $_POST['fname'], $_POST['lname'], $_POST['mail'], 0);
if ($_POST['del'] === "OK")
    deluser($_POST['login']);
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
        <td>MODIFIER</td>
        <td>AJOUTER</td>
    </tr>
    <tr>
    <form action="admin_user.php" method=POST>
        <td><input class="input" type="text" name="login" placeholder="Identifiant" class="" value=""></td>
        <td><input class="input"  type="text" name="lname" placeholder="Nom"></td>
        <td><input class="input"  type="text" name="fname" placeholder="Prénom"></td>
        <td><input class="input"  type="email" name="mail" placeholder="Mail"></td>
        <td><input class="input"  type="text" name="address" placeholder="Adresse"></td>
        <td><input type="submit" name="mod" value="OK"></td>
        <td><input type="submit" name="add" value="OK"></td>
    </form>
    </tr>
    <tr>
    
        <form action="admin_user.php" method=POST>
        <td><input class="input" type="text" name="login" placeholder="Identifiant à supprimer" class="" value=""></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="submit" name="del" value="OK"></td>
    </tr>
</table>











<!--------------------------FOOOTER----------------------->
<div class="footer">
  <p>Designed by callard & aquan ©</p>
</div>