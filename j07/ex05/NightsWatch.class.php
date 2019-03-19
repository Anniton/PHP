<?php
class NightsWatch {
	public function recruit($pers){
		$this->tab[] = $pers;
		//	var_dump($this->tab);
	}
	function fight() {	
		foreach ($this->tab as $pers)
		{
			$classes = class_implements($pers);
			if (key_exists("IFighter", $classes))
				$pers->fight();
		}
	}
}
?>
