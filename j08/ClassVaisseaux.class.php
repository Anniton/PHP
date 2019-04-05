<?php
class Vaisseaux {

	public function __construct() {
		print("CARACTERISTIQUES DU VAISSEAU" . PHP_EOL); 
	}
	public function name() {
		return "Honorable Duty";
	}
	public function PointDeCoques() {
		return "5";
	}
	public function PePe() {
		return "10";
	}
	public function Vitesse() {
		return "15";
	}
	public function Manoeuvre() {
		return "4";
	}
	public function Bouclier() {
		return "0";
	}
		public function Arme() {
		return "Batteries laser de flancs";
	}


}

include('PetitNavireClass.class.php');

$vsx = new PetitNavire();

print($vsx->name() . PHP_EOL);
print($vsx->PePe() . PHP_EOL);
print($vsx->Vitesse() . PHP_EOL);
print($vsx->Manoeuvre() . PHP_EOL);
print($vsx->Bouclier() . PHP_EOL);
print($vsx->Arme() . PHP_EOL);



?>
