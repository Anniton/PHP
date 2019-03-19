<?php
class Tyrion
{
	public function sleepWith($ppl)
	{
		if ($ppl instanceof Jaime)
			print("Not even if I'm drunk !" .PHP_EOL);
		else if ($ppl instanceof Sansa)
			print("Let's do this." .PHP_EOL);
		else if ($ppl  instanceof Cersei)
			print("Not even if I'm drunk !" .PHP_EOL);
	}
}
?>
