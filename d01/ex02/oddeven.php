#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$line = (trim(fgets(STDIN)));
	fscanf(STDIN, "%d\n", $number);
	if (feof(STDIN) == 1)
	{
		echo "^D\n";
		exit();
	}
	if (is_numeric($line) == 1)
	{
		if ($line % 2 == 0)
			echo "Le chiffre $line est Pair\n";
		else
			echo "Le chiffre $line est Impair\n";
	}
	else
		echo "'$line' n'est pas un chiffre\n";
}
?>
