<?php
include("auth.php");
session_start();
if (auth($_POST['login'], $_POST['passwd']) == TRUE)	
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>42Chat</title>
	</head>
	<html>
		<body style="background-color:powderblue;">
			<form style="background-color:LightCyan;" method="POST" action="create.php">
				<iframe name="chat" src="chat.php" width=100% height=550px"></iframe>	
				<iframe name="speak" src="speak.php" width=100% height=50px></iframe>
			</form>
		</body>
	</html>

<?php
}
else
{
	$_SESSION['loggued_on_user'] = "";
	header('Location: index.html');
	echo "ERROR\n";
}
?>


