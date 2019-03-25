<!--Doctype html-->
<html>
	<head>
		<meta charset="utf-8">
		<title>Day of the 42</title>
		<link href="doft.css" rel="stylesheet" type="text/css" />
	</head>
</html>

<!--MISE EN PAGE-->
<body>
	<div id="global">
		<img id="cluster" src="https://images.unsplash.com/photo-1526653111374-539dc6d42575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1570&q=80" alt="cluster" usemap="#clustermap" height="570" width="1020" name="imagecluster"></div>
	<map name="clustermap">
		<area shape="circle" coords="400,370,100" href="https://www.ikea.com/" alt="ikea">
		<area shape="circle" coords="910,330,100" href="https://www.apple.com/" alt="apple">
	</map>

<!-----------------------------------------CLUSTER---------------------------------------->
	<section> <img id="doft" src="./resources/day_of_the_42.png" alt="DOFT"></section>
		<div class="rectangleg"></div>
		<div class="rectangled"></div>
		<div id="textl"class="rectanglev">Vous <span id=enter>entrez</span> alors dans une grande piece remplie d'<span id="red">ordinateurs</span>...<br />
			<span id=text>- Bonjour, vous êtes nouveau ici ?</span>
			<form method="post" action="http://localhost:8080/j00/ex05/doft.php">
				<p>
					<?php
					if (!empty($_POST['user_text']) && $_POST['user_text'] != "")
					{if ($_POST['user_text'] === "Oui" || $_POST['user_text'] === "oui")
						{echo "Bienvenue à toi !" . PHP_EOL; }
						else if($_POST['user_text'] === "Non" || $_POST['user_text'] === "non")
						{echo "C'est donc votre harem ? Est-ce vous maitre ?";}
						else {
							echo "<font size='3px'>argh, vous dites n'importe quoi, où sont vos médicaments!</font>";
						}
				 } ?>
				<label for="pseudo"></label>
				<input id="bord" type="text"  size="65" maxlength="60" name="user_text"/>
				<input id="submit" type="submit" value="Repondre" />
		</div>
				</p>
			</form>
			</div>
<!----------------------------------------------ONGLETS----------------------------------->
			<div>
				<img  id="loupe" src="./resources/loupe.png" alt="Loupe" title="Loupe">
			</div>
			<div>
				<a href="https://www.disney.com/"><img class="actu" src="./resources/reload.png" alt="Recommencer au debut" title="Recommencer au début" ></a>
			</div>
			<div>
				<a href="https://www.relaischateaux.com/fr/"><img class="close" src="./resources/close.gif" alt="Déconnecter" title="Déconnecter"></a>
			</div>
			<div>
				<img class="book" src="./resources/book.png" alt="Livre" title="Livre">
			</div>
			<div>
				<img class="towel" src="./resources/towel.png" alt="Serviette" title="Serviette">
			</div>
			<div class="brick" title="Mur">
				<img src="./resources/brick.jpg" alt="Mur" title="Mur">
			</div>
			<div>
				<img class="arrow" src="./resources/arrow.png" alt="Avancer" title="Avancer" usemap="#volcan" >
				<map name="volcan">
					<area shape="rect" coords="0,0,75,75" href="http://localhost:8080/j00/ex05/volcan.html" alt="volcan">
				</map>
			</div>
			<div>
				<img class="main" src="./resources/main.png" alt="Prendre" title="Prendre">
			</div>
			<div>
				<img class="oeil" src="./resources/oeil.png" alt="Regarder" title="Regarder">
			</div>
			<div>
				<img class="outil" src="./resources/outil.png" alt="Utiliser" title="Utiliser">
			</div>
			<div>
				<img class="chaticon" src="./resources/chat-icon.png" alt="Parler" title="Parler">
			</div>
</body>
