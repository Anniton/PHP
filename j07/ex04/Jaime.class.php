<?php
/*instanceof permet de vérifier si tel objet est une instance de telle classe*/
class Jaime
{
	public function sleepWith($ppl)
	{
		if ($ppl instanceof Tyrion)
			print("Not even if I'm drunk !" .PHP_EOL);
		else if ($ppl instanceof Sansa)
			print("Let's do this." .PHP_EOL);   
		else if ($ppl instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then." .PHP_EOL);

	}
}
?>
