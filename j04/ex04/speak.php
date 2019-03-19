<?php
session_start();
//var_dump($_POST);
if (!($_SESSION['loggued_on_user']))
	echo "ERROR\n";
else 
{
	if($_POST['msg'])
	{
		if (!file_exists("../htdocs/private"))
		{
			mkdir("../htdocs");
			mkdir("../htdocs/private");
		}
		if (!file_exists("../htdocs/private/chat"))
		{
			file_put_contents('../htdocs/private/chat', null);
		}
		$data = unserialize(file_get_contents('../htdocs/private/chat'));
		$fp = fopen('../htdocs/private/chat', "w");
		flock($fp, LOCK_EX);
		$value['login'] = $_SESSION['loggued_on_user'];
		$value['time'] = time();
		$value['msg'] = $_POST['msg'];	
		$data[] = $value;
		file_put_contents('../htdocs/private/chat', serialize($data));
		fclose($fp);
	}
?>
<!DOCTYPE>
<html>
	<head>
		<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<html>
		<body>
			<form method="POST" action="speak.php">
				<label for="msg">Message : </label>
				<input type="text" name="msg" value="" />
				<input type="submit" name="submit" value="Envoyer" />
			</form>
		</body>
	</html>
<?php
}
?>
