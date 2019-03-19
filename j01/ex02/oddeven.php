#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$line = (trim(fgets(STDIN)));
	if (feof(STDIN) == TRUE)
	{
		echo "^D\n";
		exit();
	}
	if (is_numeric($line) == 1)
	{
		if ((substr($line, -1)) % 2 == 0)
			echo "Le chiffre $line est Pair\n";
		else
			echo "Le chiffre $line est Impair\n";
	}
	else
		echo "'$line' n'est pas un chiffre\n";
}
?>
