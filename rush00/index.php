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


<!---------------------CATEGORIES-------------------------->
<div class="categ">
<p class="cat">BODYS</p>
<p class="cat">SOUTIEN-GORGE</p>
<p class="cat">SWIM</p>
<p class="cat">CULOTTES</p>
</div>

<!----------------------MISE EN PAGE----------------------->
<div class="ligne1">
<div class="v1"><img src="https://www.etam.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ELIN-master/default/dw7a11c77f/650436105_x.jpg?sw=500&sh=591" class="produit" alt="produit1"/>
<div class="flex">
  <input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">24.95</div>
</div>
</div>
<div class="v1"><img src="https://int.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dwfa34eee2/650402505_x.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/></div>
<div class="v1"><img src="https://www.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dw2488dd7c/650400973_x.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/></div>
</div>



<!--------------------------FOOTER--------------------------->
<div class="footer">
  <p>Designed by callard & aquan ©</p>
</div>




</body>






















































