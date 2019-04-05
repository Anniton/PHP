<?php

require_once("Class.deplacement.php");

Class Perso {
	private $_force;
	private $_deplacement;
	private $_degats;
	private static $_text = 'Anniton';
	public function __construct()
	{

	}
	public function message(){
		echo 'Je suis active !' . PHP_EOL;
	}

	public static function nom(){
		echo self::$_text;
	}
	public function tirer(Perso $persoATirer)
	{
		$persoATirer->_degats += $this->_force;
	}

	public function gagnerDeplacement()
	{
		$this->_deplacement++;
	}
/*
	public function afficherTerrain()
	{
		echo $this->_deplacement;
	}
 */
	/*****************FONCTION AFFICHAGE***********/
	public function degats()
	{
		return $this->_degats;
	}

	public function force()
	{
		return $this->_force;
	}

	public function deplacement()
	{
		return $this->_deplacement;
	}


	/**********************GET/SET*******************/
	public function setForce($force)
	{
		$this->_force = $force;
	}
	public function setDegats($degats)
	{
		$this->_degats = $degats;
	}
	public function setDeplacement($deplacement)
	{
		$this->_deplacement = $deplacement;
	}

}
//$perso = new Perso;
//$perso->message();
//$perso->gagnerDeplacement();
//$perso->afficherTerrain();

$perso1 = new Perso();
$perso2 = new Perso();

$name = $perso1->nom();
$perso1->setForce(10);
$perso1->setDeplacement(2);

$perso2->setForce(90);
$perso2->setDeplacement(58);

$perso1->tirer($perso2);
$perso1->gagnerDeplacement();

$perso2->tirer($perso1);
$perso2->gagnerDeplacement();

echo $name . ' a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.' . PHP_EOL;
echo  $perso1->nom(). ' s\'est deplace de ', $perso1->deplacement(),', contrairement au personnage 2 qui s\'est deplace de ', $perso2->deplacement()  . PHP_EOL;
echo $perso1->nom().' a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.' . PHP_EOL;

