<?php
class UnholyFactory{
	public $fighter = Array();
	public $found = false;
	public function	absorb($pers)
	{
		$type = new ReflectionClass($pers);
		if ($type->getParentClass())
		{
			$this->id = $pers->name();
			foreach ($this->fighter as $key => $person) {
				if ($key == $this->id)
					$this->found = true;
			}
			if ($this->found)
				print "(Factory already absorbed a fighter of type " . $this->id . ")" . PHP_EOL;
			else {
				print "(Factory absorbed a fighter of type " . $this->id . ")" . PHP_EOL;
				$this->fighter[$pers->whichName] = $pers;
			}
			$this->found = false;
		}
		else
			print "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
	}
	public function fabricate($tab) {
		if (key_exists($tab, $this->fighter))
		{
			print("(Factory fabricates a fighter of type " . $tab . ")" . PHP_EOL);
			return (clone $this->fighter[$tab]);
		}
		else
			print("(Factory hasn't absorbed any fighter of type " . $tab . ")" . PHP_EOL);
	}
}



?>
