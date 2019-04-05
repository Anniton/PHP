<?php

Class PetitNavire extends Vaisseaux{
	public function __construct() {
		parent::__construct();
		print("Destroyer Imperial" . PHP_EOL);
	}
	public function name() {
		parent::name();
		print("Sword Of Absolution");
	}

	public function PointDeCoques() {
		parent::PointDeCoques();
		print("4");
	}
	public function PePe() {
		parent::PePe();
		print("10");
	}
	public function Vitesse() {
		parent::Vitesse();
		print("18");
	}
	public function Manoeuvre() {	
		parent::Manoeuvre();
		print("3");
	}
	public function Bouclier() {
		parent::Bouclier();
		print("0");
	}
	public function Arme() {
		return "Batteries laser de flancs";
	}



	public function __destruct() {
		return;
	}
}	

